<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Ingaflex\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'username' => $faker->userName,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(15),
    ];
});

$factory->define(Ingaflex\Entities\Clientes::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'url' => $faker->url,
        'file' => $faker->imageUrl(200, 200),
    ];
});

$factory->define(Ingaflex\Entities\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->sentence,
    ];
});

$factory->define(Ingaflex\Entities\Produtos::class, function (Faker\Generator $faker) {
    return [
        'cat_id' => rand(1,5),
        'nome' => $faker->name,
        'descricao' => $faker->text,
        'file' => $faker->imageUrl(200, 200),
    ];
});

$factory->define(Ingaflex\Entities\FraseProduto::class, function (Faker\Generator $faker) {
    return [
        'titulo_oquefazemos' => $faker->word,
        'frase_oquefazemos' => $faker->text,
        'titulo_rotulos' => $faker->word,
        'frase_rotulos' => $faker->text,
        'titulo_suprimentos' => $faker->word,
        'frase_suprimentos' => $faker->text,
    ];
});

$factory->define(Ingaflex\Entities\Contato::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'departamento' => $faker->word,
        'mensagem' => $faker->paragraph,
    ];
});

$factory->define(Ingaflex\Entities\Empresa::class, function (Faker\Generator $faker) {
    return [
        'texto_empresa' => $faker->text,
        'texto_missao' => $faker->text,
        'texto_visao' => $faker->text,
        'texto_valores' => $faker->text,
    ];
});

$factory->define(Ingaflex\Entities\Newsletter::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email
    ];
});


$factory->define(Ingaflex\Entities\Orcamento::class, function (Faker\Generator $faker) {
    return [
        'tipoServico' => $faker->text,
        'formato' => $faker->text,
        'subtrato' => $faker->text,
        'quantidade' => $faker->randomNumber(2),
        'cores' => $faker->word,
        'laminacao' => $faker->word,
        'acabamento' => $faker->word,
        'largura' => $faker->word,
        'comprimento' => $faker->word,
        'empresa' => $faker->company,
        'nome' => $faker->name,
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
        'cidade' => $faker->city,
        'uf' => $faker->citySuffix,
        'mensagem' => $faker->paragraph,
        'anexo' => $faker->imageUrl(200, 200)

    ];
});

$factory->define(Ingaflex\Entities\Slides::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->name,
        'file' => $faker->imageUrl(200, 200),
        'status' => $faker->word,
    ];
});

$factory->define(Ingaflex\Entities\RedeSociais::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->name,
        'file' => $faker->imageUrl(200, 200),
        'url' => $faker->url,
        'status' => $faker->word
    ];
});

$factory->define(Ingaflex\Entities\Logistica::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->name,
        'texto_logistica' => $faker->paragraph
    ];
});

$factory->define(Ingaflex\Entities\Galeria::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word
    ];
});

$factory->define(Ingaflex\Entities\GaleriaImagens::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'file' => $faker->imageUrl(200, 200),
        'gal_id' => rand(1,5)
    ];
});

$factory->define(Ingaflex\Entities\Configuracoes::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'endereco' => $faker->address,
        'bairro' => $faker->word,
        'cidade' => $faker->city,
        'estado' => $faker->citySuffix,
        'cep' => $faker->postcode
    ];
});

$factory->define(Ingaflex\Entities\FraseHome::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->word,
        'conteudo' => $faker->sentence
    ];
});

$factory->define(Ingaflex\Entities\Parceiros::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'url' => $faker->url,
        'logo' => $faker->imageUrl(200, 200),
        'status' => $faker->word
    ];
});

$factory->define(Ingaflex\Entities\LinhaDestaque::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'file' => $faker->imageUrl(200, 200),
        'status' => $faker->word
    ];
});

$factory->define(Ingaflex\Entities\Manutencao::class, function (Faker\Generator $faker) {
    return [
        'status' => $faker->sentence
    ];
});