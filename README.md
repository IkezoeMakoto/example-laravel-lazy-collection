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
docker-compose run --rm php php exampleGenerator.php
generator:0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,
array:0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,
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
