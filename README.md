# example-laravel-lazy-collection
LaravelのLazyCollectionとCollectionを比較するためのサンプルコードです。

## 環境
- PHP 8.3
- Laravel 10.39

## 使い方
1. このリポジトリをクローンします。
2. `make all` を実行します。

## 実行例
```bash
make all
docker-compose run --rm php php artisan measure:collection 1000
each呼び出し回数: 167
Time(ms): 0.301952
Memory: 736 b
Peak Memory: 19.22 mb
docker-compose run --rm php php artisan measure:collection 10000
each呼び出し回数: 1667
Time(ms): 1.145516
Memory: 24.72 kb
Peak Memory: 20.33 mb
docker-compose run --rm php php artisan measure:collection 100000
each呼び出し回数: 16667
Time(ms): 30.102493
Memory: 249.4 kb
Peak Memory: 30.86 mb
docker-compose run --rm php php artisan measure:collection 1000000

   Symfony\Component\ErrorHandler\Error\FatalError

  Allowed memory size of 134217728 bytes exhausted (tried to allocate 4194312 bytes)

  at vendor/laravel/framework/src/Illuminate/Collections/Collection.php:1317
make: [measureCollection] Error 255 (ignored)
docker-compose run --rm php php artisan measure:lazy-collection 1000
each呼び出し回数: 10
Time(ms): 0.12558
Memory: 736 b
Peak Memory: 19.54 mb
docker-compose run --rm php php artisan measure:lazy-collection 10000
each呼び出し回数: 10
Time(ms): 0.116497
Memory: 736 b
Peak Memory: 19.54 mb
docker-compose run --rm php php artisan measure:lazy-collection 100000
each呼び出し回数: 10
Time(ms): 0.144288
Memory: 736 b
Peak Memory: 19.54 mb
docker-compose run --rm php php artisan measure:lazy-collection 1000000
each呼び出し回数: 10
Time(ms): 0.129414
Memory: 736 b
Peak Memory: 19.54 mb
```
