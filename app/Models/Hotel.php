<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    private $cantidadPersonas;
    private $tipoHabitacion;
    private $cantidadDias;
    private $precioHospedaje;

    /**
     * Hotel constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getCantidadPersonas()
    {
        return $this->cantidadPersonas;
    }

    /**
     * @param mixed $cantidadPersonas
     */
    public function setCantidadPersonas($cantidadPersonas)
    {
        $this->cantidadPersonas = $cantidadPersonas;
    }

    /**
     * @return mixed
     */
    public function getTipoHabitacion()
    {
        return $this->tipoHabitacion;
    }

    /**
     * @param mixed $tipoHabitacion
     */
    public function setTipoHabitacion($tipoHabitacion)
    {
        $this->tipoHabitacion = $tipoHabitacion;
    }

    /**
     * @return mixed
     */
    public function getCantidadDias()
    {
        return $this->cantidadDias;
    }

    /**
     * @param mixed $cantidadDias
     */
    public function setCantidadDias($cantidadDias)
    {
        $this->cantidadDias = $cantidadDias;
    }

    public function calcularPrecio($tipo,$dia,$personas){
        $precio=0;
        $tipo=strtolower($tipo);
        switch ($tipo){
            case "simple":
                if($personas<=2){
                    if($dia>0&&$dia<6) {
                        $this->precioHospedaje = $this->cantidadDias * 70;
                    }else {
                        $this->precioHospedaje = $this->cantidadDias * 50;
                    }
                }else{
                    echo "no pueden entrar muchas personas";
                }
                break;
            case "doble":
                if($personas<=4){
                    if($dia>0&&$dia<6) {
                        $this->precioHospedaje = $this->cantidadDias * 80;
                    }else {
                        $this->precioHospedaje = $this->cantidadDias * 60;
                    }
                }else{
                    echo "no pueden entrar muchas personas";
                }
                break;
            case "matrimonial":
                if($personas<=4){
                    if($dia>0&$dia<6) {
                        $this->precioHospedaje = $this->cantidadDias * 120;
                    }else {
                        $this->precioHospedaje = $this->cantidadDias * 100;
                    }
                }else{
                    echo "no pueden entrar muchas personas";
                }
                break;

            default:
                echo "no puede reservar nada por datos erroneos";
                $this->precioHospedaje=0;
                break;
        }
        $this->setPrecioHospedaje($this->precioHospedaje);
        //return $precio;
    }

    /**
     * @return mixed
     */
    public function getPrecioHospedaje()
    {
        return $this->precioHospedaje;
    }

    /**
     * @param mixed $precioHospedaje
     */
    public function setPrecioHospedaje($precioHospedaje)
    {
        $this->precioHospedaje = $precioHospedaje;
    }



}
