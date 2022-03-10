# This is my package check-afm

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kgalanos/check-afm.svg?style=flat-square)](https://packagist.org/packages/kgalanos/check-afm)
[![Tests](https://github.com/kgalanos/check-afm/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/kgalanos/check-afm/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/kgalanos/check-afm.svg?style=flat-square)](https://packagist.org/packages/kgalanos/check-afm)
Έλεγχος ορθότητας Ελληνικού Αριθμού Φορολογικού Μητρώου Α.Φ.Μ.
Είναι εμπευσμένο απο το άρθρο
https://tatief.wordpress.com/2008/12/29/%CE%B1%CE%BB%CE%B3%CF%8C%CF%81%CE%B9%CE%B8%CE%BC%CE%BF%CF%82-%CF%84%CE%BF%CF%85-%CE%B1%CF%86%CE%BC-%CE%AD%CE%BB%CE%B5%CE%B3%CF%87%CE%BF%CF%82-%CE%BF%CF%81%CE%B8%CF%8C%CF%84%CE%B7%CF%84%CE%B1%CF%82/

Ο αλγόριθμος είναι ο εξής:

Από τον 9ψήφιο αριθμό που θέλουμε να ελέγξουμε, απομονώνουμε το τελευταίο ψηφίο. Αυτό είναι το ψηφίο ελέγχου που θα πρέπει να συμπίπτει με τον μονοψήφιο αριθμό που θα βρούμε παρακάτω.

Παίρνουμε τώρα ένα – ένα τα υπόλοιπα ψηφία του αριθμού, ξεκινώντας από το δεξιότερο, πολλαπλασιάζοντας το με μια δύναμη του 2, όση είναι και η θέση του ψηφίου σε αυτόν τον αριθμό. Δηλαδή για το πρώτο δεξιά με 2^1, το δεύτερο με 2^2, το τρίτο δεξιά 2^3 κοκ. Τα μερικά αυτά γινόμενα τα προσθέτουμε και έχουμε το άθροισμά τους. Αυτού του αθροίσματος παίρνουμε το υπόλοιπο της διαίρεσης με το 11 και αυτού του υπολοίπου το υπόλοιπο με το 10. Ο τελικός αυτός αριθμός πρέπει να είναι ίσος  με το ψηφίο του ΑΦΜ που απομονώσαμε.

Παράδειγμα για το ΑΦΜ 011111111 (είναι το ευκολότερο σε πράξεις). Απομονώνουμε το τελευταίο ψηφίο ( το 1 δηλαδή), για τον υπόλοιπο αριθμό 01111111 εφαρμόζουμε τα παραπάνω που είπαμε και έχουμε

1&#42;2^1+1&#42;2^2+1&#42;2^3+1&#42;2^4+1&#42;2^5+1&#42;2^6+1&#42;2^7+0&#42;2^8

=2+4+8+16+32+64+128+0=254

Το υπόλοιπο αυτού του αριθμού με το 11 είναι 1 και αυτού το υπόλοιπο με το 10 είναι πάλι 1

Το ΑΦΜ λοιπόν είναι σωστό γιατί το τελευταίο ψηφίο που απομονώσαμε είναι ίσο με το παραπάνω υπόλοιπο

## Installation

You can install the package via composer:

```bash
composer require kgalanos/check-afm
```

## Usage

```php
$skeleton = new Kgalanos\CheckAfm();
echo $skeleton->isValid('011111111');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kosta Galanos](https://github.com/kgalanos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
