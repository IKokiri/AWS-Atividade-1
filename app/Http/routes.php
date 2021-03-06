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

/**
 * Livraria Virtual
 * @version v1
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * post addAutor
 * Summary: Adiciona um novo autor
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->post('/IKokiri/Livraria/v1/autores', 'AutorApi@addAutor');
/**
 * get getAutores
 * Summary: Busca autores do armazenamento
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->get('/IKokiri/Livraria/v1/autores', 'AutorApi@getAutores');
/**
 * delete deleteAutor
 * Summary: Remoção de um autor
 * Notes: Remove um autor
 * Output-Formats: [application/json]
 */
$app->delete('/IKokiri/Livraria/v1/autores/{id}', 'AutorApi@deleteAutor');
/**
 * get getAutorById
 * Summary: Busca autor por id
 * Notes: Retorna um unico autor
 * Output-Formats: [application/json]
 */
$app->get('/IKokiri/Livraria/v1/autores/{id}', 'AutorApi@getAutorById');
/**
 * put updateAutor
 * Summary: Atualização de um autor
 * Notes: Efetua a alteração de um ou varios dados de um autor
 * Output-Formats: [application/json]
 */
$app->put('/IKokiri/Livraria/v1/autores/{id}', 'AutorApi@updateAutor');
/**
 * post addGenero
 * Summary: Adiciona um novo genero
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->post('/IKokiri/Livraria/v1/generos', 'GeneroApi@addGenero');
/**
 * get getGeneros
 * Summary: Busca generos do armazenamento
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->get('/IKokiri/Livraria/v1/generos', 'GeneroApi@getGeneros');
/**
 * delete deleteGenero
 * Summary: Remoção de um genero
 * Notes: Remove um genero
 * Output-Formats: [application/json]
 */
$app->delete('/IKokiri/Livraria/v1/generos/{id}', 'GeneroApi@deleteGenero');
/**
 * get getGeneroById
 * Summary: Busca genero por id
 * Notes: Retorna um unico genero
 * Output-Formats: [application/json]
 */
$app->get('/IKokiri/Livraria/v1/generos/{id}', 'GeneroApi@getGeneroById');
/**
 * put updateGenero
 * Summary: Atualização de um genero
 * Notes: Efetua a alteração de um ou varios dados de um genero
 * Output-Formats: [application/json]
 */
$app->put('/IKokiri/Livraria/v1/generos/{id}', 'GeneroApi@updateGenero');
/**
 * post addLivro
 * Summary: Adiciona um novo livro
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->post('/IKokiri/Livraria/v1/livros', 'LivroApi@addLivro');
/**
 * get getLivros
 * Summary: Busca livros do armazenamento
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->get('/IKokiri/Livraria/v1/livros', 'LivroApi@getLivros');
/**
 * delete deleteLivro
 * Summary: Remoção de um livro
 * Notes: Remove um livro
 * Output-Formats: [application/json]
 */
$app->delete('/IKokiri/Livraria/v1/livros/{isbn}', 'LivroApi@deleteLivro');
/**
 * get getLivroByIsbn
 * Summary: Busca livro por isbn
 * Notes: Retorna um unico livro
 * Output-Formats: [application/json]
 */
$app->get('/IKokiri/Livraria/v1/livros/{isbn}', 'LivroApi@getLivroByIsbn');
/**
 * put updateLivro
 * Summary: Atualização de um livro
 * Notes: Efetua a alteração de um ou varios dados de um livro
 * Output-Formats: [application/json]
 */
$app->put('/IKokiri/Livraria/v1/livros/{isbn}', 'LivroApi@updateLivro');

