# GitHub Actions Auto-Deploy Setup

## ✅ GitHub Actions Workflow Created

The workflow will automatically deploy your code to Hostinger whenever you push to the `main` branch.

## 🔐 Required: Set Up GitHub Secrets

You need to add your Hostinger FTP credentials as GitHub secrets:

### Steps:

1. **Go to your GitHub repository:**
   https://github.com/usmankokab/itechnism-website

2. **Click on "Settings" tab**

3. **In the left sidebar, click "Secrets and variables" → "Actions"**

4. **Click "New repository secret" and add these 3 secrets:**

   **Secret 1: FTP_SERVER**
   - Name: `FTP_SERVER`
   - Value: Your Hostinger FTP server (e.g., `ftp.itechnism.com` or IP address)
   - Get this from: Hostinger cPanel → File Manager → FTP Accounts

   **Secret 2: FTP_USERNAME**
   - Name: `FTP_USERNAME`
   - Value: Your FTP username (usually your cPanel username or email)
   - Get this from: Hostinger cPanel → FTP Accounts

   **Secret 3: FTP_PASSWORD**
   - Name: `FTP_PASSWORD`
   - Value: Your FTP password
   - Get this from: Hostinger cPanel → FTP Accounts (or create new FTP account)

## 📁 Server Directory

The workflow is configured to deploy to `/public_html/`

If your site is in a different directory (e.g., `/public_html/itechnism/`), update the `server-dir` in `.github/workflows/deploy.yml`

## 🚀 How It Works

1. You make changes locally
2. Commit: `git add . && git commit -m "Your message"`
3. Push: `git push origin main`
4. GitHub Actions automatically deploys to Hostinger
5. Changes appear on https://itechnism.com within 1-2 minutes

## 🔍 Monitor Deployments

- Go to your GitHub repository
- Click "Actions" tab
- See deployment status and logs

## ⚠️ Important Notes

- **First deployment:** May take 2-3 minutes
- **Subsequent deployments:** Only changed files are uploaded (faster)
- **Excluded files:** Test files, git files, and update scripts are not deployed
- **Database config:** Make sure `config/database.php` has correct production credentials

## 🆘 Troubleshooting

**If deployment fails:**
1. Check FTP credentials are correct
2. Verify FTP server address
3. Check server directory path
4. View error logs in GitHub Actions tab

**Common FTP server formats:**
- `ftp.yourdomain.com`
- `ftp.hostinger.com`
- IP address (e.g., `123.45.67.89`)

---

**Next Step:** Add the 3 secrets to GitHub, then push your code! 🚀
