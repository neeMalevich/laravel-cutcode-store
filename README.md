### Этап установки 
1) php artisan key:generate нужен для шифрования данных(паролей, токенов)
2) php artisan storage:link - сделать файлы общедоступными
- FILESYSTEM_DISK=local ----> public
  - Добавить в AppServiceProvider
   Model::preventLazyLoading( !app()->isProduction());
   Model::preventSilentlyDiscardingAttributes( !app()->isProduction()); для fillebal поля в модели, чтобы н езабывать добавлять
   composer require barryvdh/laravel-debugbar --dev установка debugbar
3) php artisan migrate
4) php artisan serve (http://127.0.0.1:8000/telescope/)

  


