<html>  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>${title}</title>
    <meta name="description" content="${description}" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/riot/2.3.18/riot+compiler.js'></script>

    <style>${style}</style>
  </head>
  <body>
    <!-- ユーザー定義のタグをここに展開 -->
    <app title='Hello, Riot.js'></app>

    <!-- app タグを定義 -->
<script type='riot/tag'>  
  <app>
    <h1>form</h1>

    <form onsubmit='{submit}'>
      <input type='text' name='username' />
      <input type='password' name='password' />
      <button type='submit' name='submit'>login</button>
    </form>

    this.on('mount', function() {
      this.username.value = 'phi';
      this.password.value = '1234abcd';
    });

    this.submit = function() {
      console.log('username: ', this.username.value);
      console.log('password: ', this.password.value);
    };
  </app>
</script> 

	<script>
      // マウント
      riot.mount('*');
    </script>
  </body>
</html>  