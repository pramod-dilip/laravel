@extends('master');
@section('pageContent')
    <b>What is Controller?</b><br>
    We create a model for every table. A model extends base model class and has all information and data of that specific table. By convention Name of Model is singular of associated table. Therefore a model try to find and connect with plural name of itself. Like Model mouse will try to find 'mice' table. Although this behaviour can be change by specify @tale = 'unconventional name of table'<br><br>
    <b>What is Framework?</b><br>
    Framework is a library or group of class that stop writting same code again and again. It includes all necessary code that is required at minimal stage, needed by lumpsum every developer. It gives flexibility to the developer, whether to use some predefined class or not. Developer has the ability to extend or manupulate these class in their own way. For the example if we are using laravel, we do not need to use <kbd> <?php ?> </kbd> to include php code in webpage unlike in core php.<br><br>


    <b>What is MVC?</b><br>
    M stands for Model. V stands for View and C stands for Controller.<br>
    Model works with database. <br>
    View is just like any data we see on browser.<br>
    Controller sit between Model and View.<br><br>

    <b>What is the benefits of MVC</b><br>
    In simple workflow the Logic and Presentation is found with each other. Practically its not good. Its less secure and very hard to update. MVC creates different platform for both to execute.
    <br><br>

    <b>How to Install Laravel?</b><br>
    First install Composer. Then we need command line environment like terminal on Mac. On Window <b>Git Bash is good</b>. On GitBash command prompt navigate to desired folder and type : create-project laravel/laravel ProjectName (like l5 or laravel5).<br>
    The Official way is to install Homestead created by Owtwell, creator of Laravel, but very painfull on windows. After 10 efforts I gave up.<br>
    The easiest way is to use Laragon.
    <br><br>

    <b>What is Composer?</b><br>
    Composer is a very populer Dependecies Manager. Composer is a file <b>(composer.json)</b>having all necessary program, tool, library in array form. If we need new program or tool to include in our laravel project, we just need to put that in that array. Update composer and it will download and install all necessary tool in the project. Suppose we need a tool name 'A' and 'A' needs another tool 'B' to run correctly, we need to include only 'A' in our <b>composer.json</b> and composer will install 'B' too automatically. If 'A' needs even tool 'c','d' and so on all will be downloaded and install in project automatically.
    <br><br>
@endsection