<?php

return [
    'remember'                    => 'Angemeldet bleiben?',
    'login'                       => 'Anmelden',
    'logout'                      => 'Abmelden',
    'register'                    => 'Registrieren',
    'forgot'                      => 'Passwort vergessen?',
    'password_reset'              => 'Passwort zurücksetzen',
    'password_reset_instructions' => 'Gib deine registrierte E-Mail-Adresse unten ein, um dein Passwort zurückzusetzen.',
    'password_reset_send'         => 'Weiter',

    'password_reset_email' => [
        'subject' => 'Setze dein Passwort zurück',
        'before' =>  [
            'Du bekommst diese Nachricht, weil jemand dafür gebitten hat, das Passwort für deine Konto zurücksetzen.',
            'Klick unten um dein Passwort zurückzusetzen:',
        ],
        'action' => 'Passwort zurücksetzen',
        'after'  => [
            'Dieses Link wird nach einer Stunde ablaufen.',
            'Wenn du kein Passwortzürucksetzen gebitten hast, musst du sonst nichts machen.',
        ],
    ],
];
