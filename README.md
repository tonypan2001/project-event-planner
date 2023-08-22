# Project Event Planner

![Login page](https://github.com/tonypan2001/project-event-planner/blob/bd862615537abd7fd8d7c9af5bc7960124819f84/public/readme_image/login.png)

![Eventpage](https://github.com/tonypan2001/project-event-planner/blob/bd862615537abd7fd8d7c9af5bc7960124819f84/public/readme_image/Eventpage.png)

![App Screenshot](https://github.com/tonypan2001/project-event-planner/blob/bd862615537abd7fd8d7c9af5bc7960124819f84/public/readme_image/dashboard.png)


## Installing (Build)

- วิธีที่ 1
1. ทำการ clone ไฟล์จาก github ใน repository นี้ 
2. ใช้คำสั่ง `make build`
3. ใช้คำสั่ง `make run` (ต้องเปิดใช้งาน docker ก่อน)
4. เข้ามาที่เว็บบราวเซอร์แล้วพิมพ์ url `http://localhost/`

---

- วิธีที่ 2
1. ทำการ clone ไฟล์จาก github ใน repository นี้ 
2. ใช้คำสั่ง
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
3. Copy `.env.example` และเปลี่ยนชื่อเป็น `.env`
4. ใช้คำสั่ง เพื่อ generate key และลง yarn
	- `./vendor/bin/sail artisan key:generate`
	- `./vendor/bin/sail yarn install`
5. ใช้คำสั่ง `./vendor/bin/sail up -d` (ต้องเปิดใช้งาน docker ก่อน) 
6. ใช้คำสั่ง `./vendor/bin/sail yarn dev` เพื่อเปิดใช้งาน yarn
7. ใช้คำสั่ง เพื่อเชื่อม storage และ migrate
	- `./vendor/bin/sail artisan storage:link`
	- `./vendor/bin/sail artisan migrate:fresh --seed`
4. เข้ามาที่เว็บบราวเซอร์แล้วพิมพ์ url `http://localhost/`


# ตัวอย่างข้อมูล

### Role
- User
	- Email `user01@example.com`
	- Password `password`
- Admin
	- Email `admin01@example.com`
	- Password `admin`
