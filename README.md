<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto

Este projeto esta sendo feito com intuito de auxiliar no gerenciamento de atiradores do tiro de guerra onde sera possivel ver qual pelotão cada atirador pertence
suas faltas, anotações, pontuações, se é um monitor, endereço, telefone e outros dados

## Requisitos
 Laravel 8
 PHP 7.3

## Instalação

Ao baixar o projeto rodar os seguintes comandos:
   - composer install para instalar as dependencias necessarias 
   - npm install para instalar os modulos do JetStream e do livewire (Aplicação utilizada para facilitar o login/registro de atiradores)
   - npm run dev para criar o webpack
    
Configurar o banco de dados que sera utilizado com o projeto:
  -  Insira os dados de conexão com o banco de dados no arquivo .env 
  -   Crie uma nova base de dados com o nome que foi configurado no .env (utf8mb4_general_ci)
  -  Rode o comando php artisan:migrate para gerar as tabelas na base de dados 
