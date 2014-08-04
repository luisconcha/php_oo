/**
 * File:
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: JS
 * Date: 26/07/14
 * Time: 20:29
 * Project: estudo_php
 * Copyright: 2014
 */

$(document).ready(function(){

    var container     = $( '.container' );
    var row           = container.find( '.row' );
    var listaClientes = row.find( '#listaClientes' );
    var tbody         = listaClientes.find( 'tbody' );


    //Abre ou fecha o painel da lista de clientes
    $('.panel-heading span.clickable').on( 'click',function(){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    } );

    tbody.on('click', '#btnDetalheCliente', function( e ){
        e.preventDefault();
        var idCliente  = $(this).attr( 'data-id' );
        var tipoPessoa = $(this).attr( 'data-tipoPessoa' );
        BootstrapDialog.show( {
            title: 'Detalhe do cliente',
            message: $('<div></div>').load('inc/detalheCliente.php?idCliente='+idCliente+'&tipoPessoa='+tipoPessoa),
            closable: false,
            buttons: [{
                id: 'btn-ok',
                icon: 'glyphicon glyphicon-check',
                label: 'Fechar',
                cssClass: 'btn-primary',
                //autospin: false,
                action: function(dialogRef){
                    dialogRef.close();
                }
            }]
        } );
    });

    $('#tblListaClientes').tablesorter();
});