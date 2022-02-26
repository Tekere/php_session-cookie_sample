SESSION・Cookie

Cookie：データをブラウザに保存する仕組み
セッション：一連の処理の始まりから終わりまでを表す概念

Cookieを使ってセッションを管理することで状態を維持した通信ができる

初回：サーバーから発行されたセッションIDをCookieとして、ブラウザが保存する。
次回：アクセス時に持っているCookie情報がサーバーに送られ、サーバー内のセッションIDと照合が行われる。

セッションの保存期間はデフォルトで24分
Cookie情報はブラウザ上で好きに設定できる