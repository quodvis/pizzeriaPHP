<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author n
 */
class Pedido {
    //put your code here
    private $producto;
    private $cliente;
    private $repartidor;
    private $monto;
    private $salidaPedido;
    private $pedidoEnCamino;
    private $pedidoEntregado;
    private $pedidoCancelado;
    function getProducto() {
        return $this->producto;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getRepartidor() {
        return $this->repartidor;
    }

    function getMonto() {
        return $this->monto;
    }

    function getSalidaPedido() {
        return $this->salidaPedido;
    }

    function getPedidoEnCamino() {
        return $this->pedidoEnCamino;
    }

    function getPedidoEntregado() {
        return $this->pedidoEntregado;
    }

    function getPedidoCancelado() {
        return $this->pedidoCancelado;
    }

        public function __construct(){
        
    }
    function setProducto($producto) {
        $this->producto = $producto;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setRepartidor($repartidor) {
        $this->repartidor = $repartidor;
    }

    function setMonto($monto) {
        $this->monto = $monto;
    }

    function setSalidaPedido($salidaPedido) {
        $this->salidaPedido = $salidaPedido;
    }

    function setPedidoEnCamino($pedidoEnCamino) {
        $this->pedidoEnCamino = $pedidoEnCamino;
    }

    function setPedidoEntregado($pedidoEntregado) {
        $this->pedidoEntregado = $pedidoEntregado;
    }

    function setPedidoCancelado($pedidoCancelado) {
        $this->pedidoCancelado = $pedidoCancelado;
    }


}
