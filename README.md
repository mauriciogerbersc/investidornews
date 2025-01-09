# news

1. baixar repositório
2. dentro diretório projeto, no mesmo nível de src, nginx: criar diretório */mysql*
3. no diretório */src* renomear o .env.example para .env
4. docker-compose up --build
5. docker-compose run --rm composer update
6. docker-compose run --rm artisan migrate --seed
