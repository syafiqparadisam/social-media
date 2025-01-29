setup:
    composer install
    composer update
    npm update


run-db:
    cd infra/database && docker compose up -d

test:
    
