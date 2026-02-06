<?php

class DBAdapter {
    private $data;

    public function __construct($jsonFile = 'data/db.json') {
        $jsonContent = file_get_contents($jsonFile);
        $this->data = json_decode($jsonContent, true);
        if ($this->data === null) {
            die("Error reading database file.");
        }
    }

    // Helper to filter arrays (simulate WHERE)
    private function filter($table, $conditions) {
        if (!isset($this->data[$table])) {
            return [];
        }
        
        return array_filter($this->data[$table], function($item) use ($conditions) {
            foreach ($conditions as $key => $value) {
                // Handle basic equality
                if (isset($item[$key]) && $item[$key] != $value) {
                    return false;
                }
            }
            return true;
        });
    }

    // Sort results (simulate ORDER BY)
    private function sort(&$array, $key, $direction = 'ASC') {
        usort($array, function($a, $b) use ($key, $direction) {
            if ($a[$key] == $b[$key]) return 0;
            if ($direction === 'ASC') {
                return ($a[$key] < $b[$key]) ? -1 : 1;
            } else {
                return ($a[$key] > $b[$key]) ? -1 : 1;
            }
        });
    }

    public function getMaterias($cod_categoria, $anio) {
        $results = $this->filter('materias', [
            'cod_categoria' => $cod_categoria,
            'anio_materia' => $anio,
            'baja_materia' => 0
        ]);
        $this->sort($results, 'cuatrimestre_materia', 'ASC');
        return $results;
    }

    public function getSecundario($anio) {
        $results = $this->filter('secundario', [
            'anio' => $anio
        ]);
        $this->sort($results, 'nombre_materia', 'ASC');
        return $results;
    }

    public function searchMateria($query, $cod_categoria) {
        // search 'LIKE %query%'
        $query = strtolower($query);
        $results = [];
        
        foreach ($this->data['materias'] as $materia) {
            if ($materia['cod_categoria'] == $cod_categoria && 
                $materia['baja_materia'] == 0 && 
                strpos(strtolower($materia['nombre_materia']), $query) !== false) {
                
                // Find correlativas for this materia
                $correlativas = $this->filter('correlativas', [
                    'cod_materia' => $materia['cod_materia'],
                    'baja_correlativa' => 0
                ]);

                // We only need to return the first matching materia + its correlativas (based on original logic which fetched one)
                // OR we can return all matches. The original code did:
                // $materia = mysqli_fetch_assoc($resultado); -> just the first one.
                
                return [
                    'materia' => $materia,
                    'correlativas' => $correlativas
                ];
            }
        }
        return null;
    }
}
?>
