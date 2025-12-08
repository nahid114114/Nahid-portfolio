# Profile Image Helper Script
Write-Host "`n========================================" -ForegroundColor Cyan
Write-Host "  PROFILE IMAGE HELPER" -ForegroundColor Yellow
Write-Host "========================================`n" -ForegroundColor Cyan

$targetFolder = Join-Path $PSScriptRoot "public\images"
$targetFile = Join-Path $targetFolder "profile.jpg"

# Create folder if it doesn't exist
if (-not (Test-Path $targetFolder)) {
    New-Item -ItemType Directory -Path $targetFolder -Force | Out-Null
    Write-Host "✅ Created images folder" -ForegroundColor Green
}

Write-Host "📁 Target folder: $targetFolder" -ForegroundColor Cyan
Write-Host "`nPlease provide the path to your profile picture image file." -ForegroundColor Yellow
Write-Host "Example: C:\Users\nahid\Downloads\my-photo.jpg`n" -ForegroundColor Gray

$imagePath = Read-Host "Enter the full path to your image file"

if (Test-Path $imagePath) {
    $extension = [System.IO.Path]::GetExtension($imagePath).ToLower()
    
    if ($extension -in @('.jpg', '.jpeg', '.png')) {
        $newName = "profile$extension"
        $destination = Join-Path $targetFolder $newName
        
        Copy-Item -Path $imagePath -Destination $destination -Force
        Write-Host "`n✅ SUCCESS! Image copied to: $destination" -ForegroundColor Green
        Write-Host "`nNow refresh your portfolio page to see your picture!" -ForegroundColor Yellow
    } else {
        Write-Host "`n❌ Error: File must be .jpg, .jpeg, or .png" -ForegroundColor Red
    }
} else {
    Write-Host "`n❌ Error: File not found at: $imagePath" -ForegroundColor Red
    Write-Host "`nPlease check the path and try again." -ForegroundColor Yellow
}

Write-Host "`nPress any key to exit..."
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")

