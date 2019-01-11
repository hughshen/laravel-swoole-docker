### Usage

```
git clone https://github.com/hughshen/laravel-swoole-docker && cd laravel-swoole-docker
# Composer packages
docker run --rm --interactive --tty \
    --volume `pwd`:/app \
    --volume `pwd`/.composer:/tmp \
    composer install --optimize-autoloader
# Run
docker-compose up -d
```

`Laravel serve`: `http://http://localhost:8000/hello`.

`Laravel swoole`: `http://http://localhost:8080/hello`.