<?php 

class App
{
  private static $app = null;

  /**
   * Ao fazer o construtor privado, a classe 
   * não pode ser instanciada de fora
   */
  private function __construct()
  {
  }

  /**
   * Cria uma instância de App se não foi criada, senão,
   * simplesmente retorna a instância de App
   */
  public static function get(): App
  {
    if (!self::$app) {
      self::$app = new App();
    }

    return self::$app;
  }

  public function bootstrap(): void
  {
    echo 'App is bootstrapping...';
  }
}

$app = App::get();
$app->bootstrap();