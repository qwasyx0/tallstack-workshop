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

Nyní by mělo být možné na localhost:8008 vidět uvítací obrazovku laravelu, v levém rohu login a přihlášení pomocí test@example.com a heslem password

### Optional - Build frontend závislostí
```bash
sail yarn
```

### Optional - Migrace a seed
```bash
sail artisan migrate:fresh --seed
```
