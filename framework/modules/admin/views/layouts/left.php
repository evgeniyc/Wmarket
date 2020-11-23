<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Системные инструменты', 'options' => ['class' => 'header']],
                    [	'label' => 'Пользователи', 
						'icon' => 'file-code-o', 
						'url' => ['#'],
						'items' => [
                            ['label' => 'Список пользователей', 'icon' => 'file-code-o', 'url' => ['user/index']],
                            ['label' => 'Добавить пользователя', 'icon' => 'dashboard', 'url' => ['user/create']],
							['label' => 'Редактировать пользователя', 'icon' => 'dashboard', 'url' => ['user/edit']],
						],
					],
					[	'label' => 'Категории', 
						'icon' => 'file-code-o', 
						'url' => ['#'],
						'items' => [
                            ['label' => 'Список категорий', 'icon' => 'file-code-o', 'url' => ['cats/index']],
                            ['label' => 'Создать категорию', 'icon' => 'dashboard', 'url' => ['cats/create']],
							['label' => 'Редактировать категорию', 'icon' => 'dashboard', 'url' => ['cats/edit']],
						],
					],
					[	'label' => 'Товары', 
						'icon' => 'file-code-o', 
						'url' => ['#'],
						'items' => [
                            ['label' => 'Список товаров', 'icon' => 'file-code-o', 'url' => ['products/index']],
                            ['label' => 'Создать товар', 'icon' => 'dashboard', 'url' => ['products/create']],
							['label' => 'Редактировать товар', 'icon' => 'dashboard', 'url' => ['products/edit']],
						],
					],
                ],
            ]
        ) ?>

    </section>

</aside>
