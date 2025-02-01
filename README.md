# HNG12 Public API

This is a simple public API for the HNG12 internship that returns:
- My registered email on the HNG12 Slack workspace.
- The current date/time in ISO 8601 UTC format.
- A link to this project's GitHub repository.

## API Endpoint
- **Base URL:** `[Endpoint](https://hng12-task0-gyvjq8fp6vz.vercel.app)`
- **Method:** `GET`
- **Response Format:** JSON

### Example Response
```json
{
  "email": "tulbadex@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/tulbadex/hng12-task0"
}
```
## How to run locally

```bash
git clone https://github.com/tulbadex/hng12-task0.git
cd your-repo
```

## Run a PHP development server
```bash
php -S localhost:8000
```

## Hiring Links

- [PHP Developers](https://hng.tech/hire/php-developers)
