# Setup

Laravel Herd is used to run the API locally.

Download can be found here: https://herd.laravel.com

After installing and starting Laravel Herd, setup the project:

1. Go to `C:\Users\<User>\Herd`
2. Run `git clone https://github.com/fiskero94/lfopos_api.git`
3. Make a copy of `C:\Users\<User>\Herd\lfopos_api\.env.example` to `C:\Users\<User>\Herd\lfopos_api\.env`
4. Edit the new `.env` file
4.1 Set `DB_HOST` to your test database host.
4.2 Set `DB_DATABASE` to the name of your test database on the host.
4.3 Set `DB_USERNAME` to your test user's username
4.4 Set `DB_PASSWORD` to your test user's password
5. Open a terminal
5.1 Run `C:\Users\<User>\Herd\lfopos_api`
5.2 Run `php artisan migrate:refresh --seed`

You should now have data in your database and can execute requests

Example address for request: `http://lfopos_api.test/api/products`
