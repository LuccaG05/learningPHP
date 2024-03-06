<?php

class Mochila
/**
 * @var array<Item> $itens Itens da mochila
 */
{
    private array $itens;
    private $capacidadeMax;

    public function __construct($capacidadeMax)
    {
        $this->itens = array();
        $this->setCapacidadeMax($capacidadeMax);
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    public function getCapacidadeMax()
    {
        return $this->capacidadeMax;
    }

    public function setCapacidadeMax($capacidadeMax)
    {
        if (count($this->itens) < $capacidadeMax){
            return True;
        }else{
            return False;
        }
    }

    public function inserir($item)
    {
        if (!empty($item)){
            array_push($this->itens, $item);
            return True;
        }else{
            return False;
        }
    }

    public function remover($idItem)
    {
        if ($idItem >= 0 && is_int($idItem)){
            unset($this->itens[$idItem]);
            return True;
        }else{
            return False;
        }
    }

    public function listar()
    {
        echo "<table>
        <tr>
            <th>#id</th>
            <th>Item</th>
        </tr>";

        foreach ($this->itens as $id => $item){
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$item->getNome()}</td>";
            echo "</tr>";
        }
        
        echo "</table";
    }

}