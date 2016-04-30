<?php

date_default_timezone_set('America/Bogota');
include_once "../activerecords/conexion.php";
include_once Config::$home_bin . Config::$ds . 'db' . Config::$ds . 'active_table.php';

class modelproductos
{

    public function CantidadProductos()
    {
        
    }

    public function VerProductos($Pag = 1, $search = '',$tipo_producto ='')
    {
        $filtros = array();
        $where   = '';
        $wheres  = array();
        if ($search != '')
        {
            $wheres[] = " UPPER(`productos`.`descripcion`) LIKE UPPER('%" . $search . "%') ";
        }
        if ($tipo_producto !== '')
        {
            $tipo = array();
            foreach ($tipo_producto as $temp)
            {
                $tipo[]    = ' `tipo_producto`.`id_tipo` = ? ';
                $filtros[] = $temp;
            }
            $wheres[] = ' (' . implode(' or ', $tipo) . ') ';
        }
        if (count($wheres) > 0)
        {
            $where = ' WHERE ' . implode(' and ', $wheres);
        }
        $filtros[] = (($Pag - 1) * 9);
        $sql       = "SELECT 
                    `tbl_producto`.`descripcion`,
                    `tbl_producto`.`cantidad`,
                    `tbl_producto`.`minimo_stock`
                  FROM
                    `tbl_producto`
                  ORDER BY
                    `tbl_producto`.`descripcion`
            {$where}
            Limit 9 OFFSET ?";
            
        $con = App::$base;
        $Res = $con->Records($sql, $filtros);
        return $Res;
    }

}
