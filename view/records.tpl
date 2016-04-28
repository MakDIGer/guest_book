{% include 'header.tpl' %}
        <section id="main_section">
            {% for item in items %}
            <article>
                <header>
                    <h3><a href="index.php?p=record&pp={{ item.id }}">{{ item.title }}</a></h3>
                </header>
                <p>{{ item.text|slice(0, 400) }} ...</p>
                <footer>
                    <time datetime="{{ item.datepost }}"><em>Опубликовал <a href="email:{{ item.email }}">{{ item.nickname }}</a> {{ item.datepost }} {{ item.timepost }}</em></time>
                    </footer>
            </article>
            {% endfor %}               
        </section>
        <section id="otziv">
            <form method="POST" action="index.php?p=addRecord">
                <fieldset>
                    <legend>Оставить свой отзыв:</legend>
                    <div id="bigbox">
                    <div id="box1">
                        <p><label>Заголовок записи:</label></p>
                        <p><label>Ник:</label></p>
                        <p><label>Почта:</label></p>
                    </div>
                    <div id="box2">
                        <p><input type="text" name="title" maxlength="128" size="45"></p>
                        <p><input type="text" name="nickname" maxlength="64" size="45"></p>
                        <p><input type="email" name="email" size="45" maxlength="128"></p>
                    </div>
                    </div>
                    <textarea name="text" cols="80" rows="10" maxlength="800" placeholder="Оставить отзыв тут."></textarea>
                </fieldset>
                <p><input type="submit" value="Отправить"><input type="reset" value="Очистить"></p>
            </form>
        </section>
{% include 'footer.tpl' %}