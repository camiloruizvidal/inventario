<?php

date_default_timezone_set('America/Bogota');
include_once "../activerecords/conexion.php";
include_once Config::$home_bin . Config::$ds . 'db' . Config::$ds . 'active_table.php';

class modelproductos
{

    public function InsertProductos($descripcion, $id_producto_presentacion, $valor, $cantidad, $minimo_stock, $id_producto_tipo)
    {
        if ($descripcion != '')
        {

            $producto = atable::Make('tbl_producto');
            $producto->Load("descripcion = '{$descripcion}'");
            if (is_null($producto->id_producto))
            {
                $producto->descripcion              = $descripcion;
                $producto->id_producto_presentacion = $id_producto_presentacion;
                $producto->valor                    = $valor;
                $producto->cantidad                 = $cantidad;
                $producto->minimo_stock             = $minimo_stock;
                $producto->id_producto_tipo         = $id_producto_tipo;
            }
            else
            {
                $producto->cantidad                 = $producto->cantidad + $cantidad;
                $producto->id_producto_presentacion = $id_producto_presentacion;
                $producto->valor                    = $valor;
                $producto->minimo_stock             = $minimo_stock;
                $producto->id_producto_tipo         = $id_producto_tipo;
            }
            $producto->Save();
            return $producto->id_producto;
        }
    }

    public function CantidadProductos($search = '', $tipo_producto = '')
    {
        $filtros = array();
        $where   = '';
        $wheres  = array();
        if ($search != '')
        {
            $wheres[] = " UPPER(`tbl_producto`.`descripcion`) LIKE UPPER('%" . $search . "%') ";
        }
        if ($tipo_producto !== '')
        {
            $tipo = array();
            foreach ($tipo_producto as $temp)
            {
                $tipo[]    = ' `tbl_producto`.`id_producto_tipo` = ? ';
                $filtros[] = $temp;
            }
            $wheres[] = ' (' . implode(' or ', $tipo) . ') ';
        }
        if (count($wheres) > 0)
        {
            $where = ' WHERE ' . implode(' and ', $wheres);
        }
        $sql = "SELECT 
                    ROUND(count(`tbl_producto`.`id_producto`)/10) as cant
                  FROM
                    `tbl_producto`
            {$where}";
        $con = App::$base;
        $Res = $con->Record($sql, $filtros);
        return $Res['cant'];
    }

    public function VerProductos($Pag = 1, $search = '', $tipo_producto = '')
    {
        $filtros = array();
        $where   = '';
        $wheres  = array();
        if ($search != '')
        {
            $wheres[] = " UPPER(`tbl_producto`.`descripcion`) LIKE UPPER('%" . $search . "%') ";
        }
        if ($tipo_producto !== '')
        {
            $tipo = array();
            foreach ($tipo_producto as $temp)
            {
                $tipo[]    = ' `tbl_producto`.`id_producto_tipo` = ? ';
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
            Limit 10 OFFSET ?";
        $con       = App::$base;
        $Res       = $con->TablasDato($sql, $filtros);
        return $Res;
    }

    public function VerPresentacionesProductos()
    {
        $sql = "SELECT 
  `tbl_producto_presentacion`.`id_producto_presentacion`,
  `tbl_producto_presentacion`.`descripcion`
FROM
  `tbl_producto_presentacion`
ORDER BY
  `tbl_producto_presentacion`.`descripcion`";

        $con = App::$base;
        $Res = $con->TablasDato($sql);
        return $Res;
    }

    public function VerTiposProductos()
    {
        $sql = "SELECT 
  `tbl_producto_tipo`.`id_producto_tipo`,
  `tbl_producto_tipo`.`descripcion`
FROM
  `tbl_producto_tipo`
ORDER BY
  `tbl_producto_tipo`.`descripcion`";

        $con = App::$base;
        $Res = $con->TablasDato($sql);
        return $Res;
    }

}
