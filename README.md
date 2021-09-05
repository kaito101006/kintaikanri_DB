# Time and attendance system  
![Top](kintai/Top.png)  
この勤怠管理システムは、初めての作品として制作したシステムです。デザインはシンプルで分かりやすいように設計しております。ボタンで時間を送信出来る打刻となっております。あらかじめSQLで登録したユーザーIDをテキストに入力して打刻を登録するように設定しております。 
 
この作品は管理者がユーザーの打刻情報を見れるシステムも制作しております。ユーザーの打刻情報の一覧を見るにはまず、ログインをして入らなければならない保護を制作しております。ログイン機能もあらかじめSQLに登録してあるIDとパスワードでログイン出来るようにしてあります。打刻情報は登録された都度送信されたデータを更新するような作りとなっております。
 
※このシステムは作品として紹介していますのでデモを試すには、まずphpがネットワークに接続出来るようにしてください。また、SQLファイルをインポートしてSQLも接続できるようにしてください。

# table of contents
- Sistem image(User side)
- Sistem image(Sier side)
- File Structure
- Programming language
# Sistem image(User side)
kanri1.php

![user1](kintai/user1.png)
kanri2.php

![user2](kintai/user2.png)
# Sistem image(Sier side)
login.php

![sier1](kintai/sier1.png)
main.php(1)

![sier2](kintai/sier2.png)
main.php(2)

![sier3](kintai/sier3.png)

# File Structure
ダウンロードしたファイルには、次のディレクトリとファイルがあります。 

```
Time and attendance system /  
├── kintai/  
|   ├── css/  
|   |   ├── kanri1.css  
|   |   ├── kanri2.css  
|   |   ├── kanri3.css  
|   |   ├── kanri4.css  
|   |   ├── kanri5.css  
|   |   ├── login.css  
|   |   └── main.css  
|   ├── js/  
|   |   ├── hizuke1.js  
|   |   └── zikoku.js  
|   ├── php/  
|        ├── kanri1.php  
|        ├── kanri2.php  
|        ├── kanri3.php  
|        ├── kanri4.php  
|        ├── kanri5.php  
|        ├── login.php  
|        └── main.php  
|   
|
└── sql/  
      └── kintaikanri.sql  
``` 
 



# Programming language
