<html>  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>${title}</title>
    <meta name="description" content="${description}" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/riot/2.3.18/riot+compiler.js'></script>

<script type='riot/tag'>  
  <app>
    <h1>Event handlers</h1>

    <button onclick='{click}'>click</button>

    <ul>
      <li each='{list}'>
        <button onclick='{clickItem}'>{name}</button>
      </li>
    </ul>

    this.list = [
      {name:'hoge'},
      {name:'foo'},
      {name:'bar'},
    ];

    this.click = function() {
      console.log('click されたよー');
    };

    this.clickItem = function(e) {
      console.log(e.item.name + 'が click されたよー');
    };
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

    <style>${style}</style>
  </head>
  <body>
    <!-- ユーザー定義のタグをここに展開 -->
    <app title='Hello, Riot.js'></app>

    <!-- app タグを定義 -->
    <script type="riot/tag">
      <app>
        <h1>{ title }</h1>
        this.title = opts.title;
      </app>
    </script>

    <script>
      // マウント
      riot.mount('*');
    </script>
  </body>
</html>  