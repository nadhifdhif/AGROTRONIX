#!/bin/bash
# ============================
# Auto Start Laravel + Vite + Ngrok
# by Nadhif & ChatGPT 😎
# ============================

# Warna untuk output biar keren
GREEN="\033[0;32m"
YELLOW="\033[1;33m"
NC="\033[0m" # No Color

echo -e "${YELLOW}🔍 Membunuh proses ngrok lama...${NC}"
killall ngrok 2>/dev/null

echo -e "${GREEN}✅ Semua tunnel lama dimatikan.${NC}"

# Jalankan Laravel
echo -e "${YELLOW}🚀 Menjalankan Laravel di port 8000...${NC}"
php artisan serve --host=0.0.0.0 --port=8000 &
LARAVEL_PID=$!
sleep 3

# Jalankan Vite (npm run dev)
echo -e "${YELLOW}💻 Menjalankan Vite (npm run dev)...${NC}"
npm run dev -- --host &
VITE_PID=$!
sleep 5

# Jalankan ngrok untuk Laravel
echo -e "${YELLOW}🌍 Menjalankan ngrok untuk Laravel (port 8000)...${NC}"
ngrok http 8000 > /dev/null &
sleep 3

# Jalankan ngrok untuk Vite
echo -e "${YELLOW}🎨 Menjalankan ngrok untuk Vite (port 5173)...${NC}"
ngrok http 5173 > /dev/null &
sleep 3

echo -e "${GREEN}✨ Semua service sudah jalan!${NC}"
echo -e "${YELLOW}🔗 Cek status tunnel di http://127.0.0.1:4040/status${NC}"
echo -e "${YELLOW}🛑 Untuk menghentikan semua, tekan Ctrl+C lalu jalankan:${NC}"
echo -e "${GREEN}killall php npm ngrok${NC}"

# Biar tetap nyala sampai lo matiin manual
wait
