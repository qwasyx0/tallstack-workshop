# Instalace

### Instalace composer balíčků
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

### Vytvoření aliasu pro sail
```bash
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

### Sputění aplikace bez aliasu
```bash
./vendor/bin/sail up
```

### Sputění aplikace s aliasem
```bash
sail up
```

### Build frontend závislostí
```bash
sail yarn
```
### Migrace a seed
```bash
sail artisan migrate:fresh --seed
```
