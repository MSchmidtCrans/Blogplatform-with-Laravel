
In this project I'll create a blog platform based on user stories provided by the coaches.

For user stories check: <a href="https://github.com/florisknol/codegorilla/blob/master/CodeGorilla_blogplatform.md">USER STORIES</a>

Demo: <a href="https://mschmidtcrans.github.io/Blogplatform-with-Laravel/index">Click me</a>

1. Setup laravel and github. -done-

2. Create first route and test views. -done-

3. Set up routing following Laravel routing convention and Laravel resource. -done-
    - Make a new controller and model with the artisan -> resource command

<strong>Blogger wants to create new blogs and be able to edit his blogs:</strong>

1. Create a create new blog view. -done-

2. Create a store function and check if record is created in blogs table. -done-

3. Make a new index view to display stored table records. And adapt the controller accordingly. -done-

4. Make a show one blog view for displaying a single blog record and adapt the controller accordingly. -done-

5. Make a edit view to edit a blog record and adapt the controller accordingly. -done-

6. Make a delete view to destroy a record and adapt the controller accordingly.  -done-


<strong>Blogger must be able to add a pciture to his/her blog:</strong>

1.  Adapt blog model to store fileproperties in the blog table and migrate model. -done-

2. Create file input field in 'create blog' view to select the picture. -done-

3. Configure the laravel file system to store pictures in the public folder. -done-

4. Adapt controller to store file properties. -done-

5. Adapt show blog view to show the stores picture. -done-

6. Picture can now be added when editing a blog. -done-

<strong>Blogger can create new categories.</br>
Blogger can assign an article to a category.</br>
Blogger can assign an article to mutiple categories.</strong>

1. Set a new relation between blogs and categories. -done-

2. Categories must be visible on the single blog view. -done-

3. Categories must be pulled from a seperate table. This is to maintain categories. -done-

4. Categories can be assigned to articles. -done-

5. Articles can be assigned to categories. -stripped-

6. Add categories checkbox choice to create blog form -done-

7. Add create categorie button to create view -done-

8. Add new categorie to categories table -done-

9. New categorie must be selectable from create view -done-