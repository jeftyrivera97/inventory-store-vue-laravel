# Store Inventory Management System

A comprehensive inventory management system built with Laravel, Inertia.js, and modern web technologies for efficient product, supplier, and category management.

## 🚀 Features

### Product Management
- **Product Registration**: Add products with detailed information including codes, descriptions, categories, suppliers, and pricing
- **Advanced Search**: Search products by description, product code, brand, size, price, and supplier name
- **Stock Control**: Track inventory levels and product values
- **Tax Management**: Handle different tax types (15%, 18%, exempt, exonerated)
- **Multi-field Search**: Comprehensive search across all product attributes

### Supplier Management
- **Supplier Registration**: Manage supplier information with RTN, descriptions, categories, and contact details
- **Search Functionality**: Search suppliers by description, RTN code, and contact information
- **Relationship Tracking**: Link products to their respective suppliers

### Category Management
- **Product Categories**: Organize products into logical categories
- **Category Search**: Quick search functionality for category management
- **Hierarchical Organization**: Maintain product organization structure

### General Features
- **Real-time Search**: Dynamic search with instant results
- **Pagination**: Efficient data handling with paginated results
- **Soft Deletes**: Safe deletion with recovery options
- **User Authentication**: Secure access control
- **Responsive Design**: Works across different devices
- **Data Validation**: Comprehensive input validation and error handling

## 🛠️ Technology Stack

- **Backend**: Laravel 12+ (PHP)
- **Frontend**: Inertia.js with Vue.js
- **Database**: MySQL
- **Styling**: Tailwind CSS
- **Build Tool**: Vite
- **Authentication**: Laravel Breeze/Sanctum

## 📋 Requirements

- PHP 8.1+
- Composer
- Node.js 16+
- MySQL 5.7+ or SQLite
- Web server (Apache/Nginx)

## 🔧 Installation

1. **Clone the repository**
```bash
git clone <repository-url>
cd store.inventory
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node.js dependencies**
```bash
npm install
```

4. **Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Database configuration**
   - Update `.env` file with your database credentials
   - Configure your database connection

6. **Run migrations**
```bash
php artisan migrate
```

7. **Seed the database (optional)**
```bash
php artisan db:seed
```

8. **Build assets**
```bash
npm run build
# or for development
npm run dev
```

9. **Start the development server**
```bash
php artisan serve
```

## 📊 Database Structure

### Main Tables
- **productos**: Product information and inventory
- **proveedores**: Supplier management
- **producto_categorias**: Product categories
- **impuestos**: Tax types and rates
- **estados**: Status management
- **users**: User authentication

### Key Relationships
- Products belong to categories and suppliers
- Products have associated tax information
- All entities have status tracking
- User activity logging

## 🔍 Usage

### Adding Products
1. Navigate to Products → Add New Product
2. Fill in product details (code, description, category, supplier)
3. Set pricing and tax information
4. Define stock levels
5. Save the product

### Searching Inventory
- Use the search bar to find products by:
  - Product description
  - Product code
  - Brand name
  - Size
  - Price
  - Supplier name

### Managing Suppliers
1. Go to Suppliers section
2. Add supplier information (RTN, name, contact)
3. Link suppliers to products during product creation

### Categories
- Organize products into logical categories
- Search and manage category structure
- Assign categories during product creation

## 🎯 Key Features Explained

### Advanced Search System
The system implements intelligent search across multiple fields:
```php
// Search across product attributes and related supplier names
$products = Producto::where('id_estado', 1)
    ->where(function($q) use ($query) {
        $q->where("descripcion", "like", "$query%")
          ->orWhere("codigo_producto", "like", "$query%")
          ->orWhere("marca", "like", "$query%")
          ->orWhere("size", "like", "$query%")
          ->orWhere("precio_venta", "like", "$query%")
          ->orWhereHas('proveedor', function($subQuery) use ($query) {
              $subQuery->where('descripcion', 'like', "$query%");
          });
    })->paginate(50);
```

### Tax Calculation System
Automatic tax calculations based on different tax types:
- 15% tax rate
- 18% tax rate
- Exempt products
- Exonerated products

### Inventory Valuation
Real-time calculation of:
- Total products in stock
- Total inventory value
- Stock levels per product

## 🔐 Security Features

- User authentication and authorization
- Input validation and sanitization
- CSRF protection
- SQL injection prevention
- Soft deletes for data recovery

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## 📞 Support

For support and questions:
- Create an issue in the repository
- Contact the development team
- Check the documentation

## 🔄 Version History

- **v1.0.0** - Initial release with core inventory management features
- Product, supplier, and category management
- Advanced search functionality
- Tax calculation system
- User authentication

---

**Built with ❤️ for efficient inventory management**
