
<img width="400" src="https://d3lnipq2e3xuc0.cloudfront.net/media/l/800x400/1557406595/banner.png" alt="Banner">

Default template for creating sites built with the Netflex SDK.

# Setup

To be able to develop locally **ngrok** must be installed and available in your $PATH.

Follow [these instructions](https://ngrok.com/download) to setup **ngrok**.

Then, follow these steps:

## 1. Environment file

Rename `.env.example` to `.env` and fill out these parameters:
* `NETFLEX_PUBLIC_KEY` (Monitor: Public Key (Content API))
* `NETFLEX_PRIVATE_KEY` (Monitor: Master Private key (Content API))

## 2. Install dependencies

```bash
composer install
yarn
```

## 3. Compile assets

```bash
yarn build
```

## 4. Run your site locally

```bash
php artisan serve
```

## 5. CircleCI

Before you can run the site in our online development environment, you need to set the following environment variables in CircleCI:
* `NETFLEX_PUBLIC_KEY` (Monitor: Public Key (Content API))
* `NETFLEX_PRIVATE_KEY` (Monitor: Master Private key (Content API))
* `CPANEL_USERNAME` (Monitor: Web Username)
* `CPANEL_PASSWORD` (Monitor: Web Password)

## VSCode extension

For an improved development experience, please install our [VSCode extension](https://marketplace.visualstudio.com/items?itemName=apility.netflex-vscode)

###
###

---

###

### Contributing

Thank you for considering contributing to the Netflex Structure! Please read the [contribution guide](CONTRIBUTING.md).

### Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](CODE_OF_CONDUCT.md).

### License

The Netflex SDK is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
