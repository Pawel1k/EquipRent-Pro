<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rejestracja</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f8; margin: 0; padding: 24px; }
        .card { max-width: 420px; margin: 40px auto; background: #fff; border-radius: 8px; padding: 24px; box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
        h1 { margin-top: 0; font-size: 1.4rem; }
        label { display: block; margin-top: 12px; font-weight: 600; }
        input { width: 100%; padding: 10px; margin-top: 6px; border: 1px solid #cfcfd4; border-radius: 6px; box-sizing: border-box; }
        button { margin-top: 16px; width: 100%; border: 0; background: #1f6feb; color: #fff; padding: 10px 14px; border-radius: 6px; cursor: pointer; }
        .hint { font-size: 0.9rem; color: #666; margin-top: 14px; }
        .message { margin-top: 14px; font-size: 0.95rem; }
        .error { color: #b42318; }
        .ok { color: #067647; }
    </style>
</head>
<body>
<main class="card">
    <h1>Rejestracja</h1>

    <form id="register-form">
        <label for="name">Imię i nazwisko</label>
        <input id="name" name="name" type="text" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>

        <label for="password">Hasło</label>
        <input id="password" name="password" type="password" required>

        <label for="password_confirmation">Powtórz hasło</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required>

        <button type="submit">Utwórz konto</button>
    </form>

    <p id="message" class="message"></p>
    <p class="hint">Masz już konto? <a href="/login">Zaloguj się</a></p>
</main>

<script>
    const form = document.getElementById('register-form');
    const message = document.getElementById('message');
    const csrf = document.querySelector('meta[name="csrf-token"]').content;

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        message.textContent = '';
        message.className = 'message';

        const payload = {
            name: form.name.value,
            email: form.email.value,
            password: form.password.value,
            password_confirmation: form.password_confirmation.value,
        };

        try {
            const response = await fetch('/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrf,
                },
                body: JSON.stringify(payload),
            });

            if (response.ok) {
                message.textContent = 'Konto utworzone. Przekierowuję...';
                message.classList.add('ok');
                window.location.href = '/';
                return;
            }

            const data = await response.json().catch(() => ({}));
            const firstError = data?.errors ? Object.values(data.errors)[0]?.[0] : null;
            message.textContent = firstError || data?.message || 'Nie udało się zarejestrować.';
            message.classList.add('error');
        } catch (error) {
            message.textContent = 'Błąd połączenia z serwerem.';
            message.classList.add('error');
        }
    });
</script>
</body>
</html>
