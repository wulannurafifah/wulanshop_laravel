# Dokumentasi CRUD API `Wulan Shop`
## 1. Introduction
API ini digunakan oleh user dan admin untuk mengambil data yang berada pada aplikasi E-commerce. Seperti data produk, jumlah produk yang tersedia, harga produk, dan yang lain-lain yang diperbolehkan untuk diambil datanya. 

## 2. API Request Methods
| Role    |  Request Methods  |
| ------------- |:--------------|
|admin| GET, POST, DEL |
|user| GET |


## 3. API Protocol
`HTTP`

## 4. API Response
| Parameters    |  Description  |
| ------------- |:--------------|
|status| `ok` Jika data berhasil di-push. `error` Jika data tidak berhasil ditambahkan|
|message| Pesan response dari server|
#### Examples :
- `status: ok`
```json
{
    "status": ok,
    "message": "Berhasil"
}
```

- `status: error`
```json
{
    "status": error,
    "message": "Gagal"
}
```

## 5. API Request Parameters
### 1. User
#### HTTP Request 
- `GET List All Products` 
```json
PATCH http://127.0.0.1:8000/
```
### 2. Admin
#### HTTP Request 
- `GET List All Pegawai` 
```json
PATCH http://127.0.0.1:8000/login
```
## 3. Database
`Table Admin Info `
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|admin_id| bigint (20) | AUTO_INCREMENT |
|admin_name| varchar (255) |
|admin_email| varchar (255) |
|admin_password| varchar (255) |


`Table Brands`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|brand_id| bigint (20) | AUTO_INCREMENT |
|brand_title| varchar (255) |


`Table Categories`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|cat_id| bigint (20) | AUTO_INCREMENT |
|cat_title| varchar (255) | 


`Table Email Info`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|email_id| bigint (20) | AUTO_INCREMENT |
|email| varchar (255) |


`Table Logs`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|id | bigint (20) | AUTO_INCREMENT |
|user_id| varchar (255) |
|action| varchar (255) |
|date| varchar (255) |


`Table Orders`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|oreder_id | bigint (20) | AUTO_INCREMENT |
|user_id| int (11) |
|product_id| int (11) |
|qty| int (11) |
|trx_id| int (11) |
|p_status| varchar (255) |


`Table Orders Info`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------|
|oreder_id | bigint (20) | AUTO_INCREMENT |
|user_id| int (11) |
|first_name| varchar (255) |
|email| varchar (255) |
|address| varchar (255) |
|jumlah_produk| varchar (255) |
|total_harga| varchar (255) |


`Table Order Products`
| Name    |  Length  |
| ------------- |:--------------| 
|order_pro_id | int (10) | 
|order_id | int (11) |
|product_id | int (11) | 
|qty | int (15) | 
|jml | int (15) | 


`Table Products`
| Name    |  Length  | 
| ------------- |:--------------| 
|product_id | bigint (20) |  
|product_cat | int (100) | 
|product_brand | varchar (255) | 
|product_title | varchar (255) | 
|product_price | int (11) | 
|product_desc | varchar (255) |
|product_image | longtext |
|product_keywords | varchar (255) |


`Table User Info`
| Name    |  Length  | Type  |
| ------------- |:--------------| :--------------| 
|user_id | bigint (20) | AUTO_INCREMENT |
|first_name| varchar (255) |
|last_name| varchar (255) |
|email| varchar (255) |
|password| varchar (255) |
|mobile | int (11) |
|address1 | longtext |
|address2 | longtext |
