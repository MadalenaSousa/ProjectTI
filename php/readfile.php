<?php
function lerFicheiro($filename)
{

    $handle = fopen($filename, "r");

    $i = 0;

    $idEncomenda = -1;
    $encomendas = array();

    while (($data = fgets($handle)) !== FALSE) {
        if ($i == 0) {
            $idEncomenda = trim($data);
            $encomendas[$idEncomenda] = array();
        } else if ($i == 1) {
            $encomendas[$idEncomenda]['nome'] = trim($data);
        } else if ($i == 2) {
            $encomendas[$idEncomenda]['email'] = trim($data);
        } else if ($i == 3) {
            $encomendas[$idEncomenda]['tlmvl'] = trim($data);
        } else if ($i == 4) {
            $encomendas[$idEncomenda]['morada'] = trim($data);
        } else if ($i == 5) {
            $encomendas[$idEncomenda]['nCartao'] = trim($data);
        } else if ($i == 6) {
            $encomendas[$idEncomenda]['validade'] = trim($data);
        } else if ($i == 7) {
            $encomendas[$idEncomenda]['codigo'] = trim($data);
        } else if ($i == 8) {
            $numItens = trim($data);

            $encomendas[$idEncomenda]['items'] = array();

            for ($z = 0; $z < $numItens; $z++) {
                $id = fgets($handle);
                $quant = fgets($handle);

                $array = array(
                    'id' => trim($id),
                    'quantity' => trim($quant)
                );
                array_push($encomendas[$idEncomenda]['items'], $array);
            }
        }

        $i++;

        if (strcmp($data, "\n") == 0) {
            $i = 0;
        }
    }

    fclose($handle);

    return $encomendas;
}
