# Security Notes

Do not commit:

- database passwords
- API keys or tokens
- cPanel/FTP credentials
- email account credentials
- production database dumps
- private user uploads
- server logs

If a credential has ever been exposed in a public repository, rotate it even
after deleting the file from the latest commit.
