<style>
    .error-box{
        width: 100%;
        background-color: #f5f5f5;
        padding: 25px 0;
        margin-top: 50px;
        position: fixed;
        bottom: 0;
        box-shadow: 0 0 7px 1px red;
    }
</style>


<div class="error-box">
    <div class="container">
        <h1>Найдены ошибки:</h1>
        <?php
        var_dump($errno, $errstr, $errfile, $errline);
        ?>
    </div>

</div>
