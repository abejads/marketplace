
# Command

```
git clone https://github.com/abejads/marketplace
cd marketplace

composer install
cp .env.example .env
php artisan key:generate

php artisan migrate:fresh --seed

```

# Fitur selesai
```
1. Register
2. Login
3. Add cart (auto nambah kalo udah ada existing cart)
4. Products (index, product, sama detail product)
```

# Fitur belum lengkap
```
1. Account (blom ada edit dan masih nampilin nama sama email doang)
2. Checkout belom ada
3. Update jumlah di cart
4. Jumlah barang di keranjang pada navbar 
```