<?php

/**
 * Livraria Virtual
 * Manipulação de livros e suas dependências 
 *
 * OpenAPI spec version: v1
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class GeneroApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation addGenero
     *
     * Adiciona um novo genero.
     *
     *
     * @return Http response
     */
    public function addGenero()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addGenero');
        }
        $body = $input['body'];


        return response('How about implementing addGenero as a post method ?');
    }
    /**
     * Operation getGeneros
     *
     * Busca generos do armazenamento.
     *
     *
     * @return Http response
     */
    public function getGeneros()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getGeneros as a get method ?');
    }
    /**
     * Operation deleteGenero
     *
     * Remoção de um genero.
     *
     * @param int $id identificador do genero que será removido (required)
     *
     * @return Http response
     */
    public function deleteGenero($id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteGenero as a delete method ?');
    }
    /**
     * Operation getGeneroById
     *
     * Busca genero por id.
     *
     * @param int $id identificador do genero de retorno (required)
     *
     * @return Http response
     */
    public function getGeneroById($id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getGeneroById as a get method ?');
    }
    /**
     * Operation updateGenero
     *
     * Atualização de um genero.
     *
     * @param int $id identificador do genero que será alterado (required)
     *
     * @return Http response
     */
    public function updateGenero($id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateGenero as a put method ?');
    }
}
