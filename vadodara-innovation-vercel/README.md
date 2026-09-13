# Vadodara Innovation Challenge 2026 – Vercel Package

This package contains two PHP + MySQLi forms:

1. `public/institution-form.php`
   - Rashtriya Innovation Challenge 2026 – Vadodara Education Institution Data & Participation Form

2. `public/ecosystem-form.php`
   - Rashtriya Innovation Challenge 2026 – Vadodara Innovation & Support Ecosystem Common Registration Form

## Deployment

This project uses Vercel's Docker/Fluid Compute deployment for PHP through the root `Dockerfile`.

### 1. Create MySQL database
Run:

`database/schema.sql`

on your MySQL/MariaDB server.

### 2. Deploy this folder to Vercel

Import the project into Vercel or run:

`vercel`

### 3. Add Environment Variables in Vercel

DB_HOST
DB_PORT
DB_NAME
DB_USER
DB_PASSWORD

Example:

DB_HOST=your-mysql-host
DB_PORT=3306
DB_NAME=innovation_ecosystem_2026
DB_USER=your-user
DB_PASSWORD=your-password

Do NOT put database credentials inside the PHP files.

### 4. URLs

/                 -> landing page
/institution-form.php
/ecosystem-form.php

Form submissions go to:

/api/submit-institution.php
/api/submit-ecosystem.php

## Important

Vercel's deployed container is stateless. MySQL must be an external/persistent database; do not rely on local files for database storage.
