<?php
// starter-project/public/catalogue.php
require_once __DIR__ . '/../app/data.php';
// $products est maintenant disponible
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - MaBoutique</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="container header__container">
        <a href="index.html" class="header__logo">🛍️ MaBoutique</a>
        <nav class="header__nav">
            <a href="index.html" class="header__nav-link">Accueil</a>
            <a href="catalogue.html" class="header__nav-link header__nav-link--active">Catalogue</a>
            <a href="contact.html" class="header__nav-link">Contact</a>
        </nav>
        <div class="header__actions">
            <a href="panier.html" class="header__cart">🛒<span class="header__cart-badge">3</span></a>
            <a href="connexion.html" class="btn btn--primary btn--sm">Connexion</a>
        </div>
        <button class="header__menu-toggle">☰</button>
    </div>
</header>

<main class="main-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Notre Catalogue</h1>
            <p class="page-subtitle">Découvrez tous nos produits</p>
        </div>

        <div class="catalog-layout">

            <!-- ============================================
                 SIDEBAR FILTRES
                 JOUR 6 : Formulaire GET + conservation valeurs
                 ============================================ -->
            <aside class="catalog-sidebar">
                <form>
                    <div class="catalog-sidebar__section">
                        <h3 class="catalog-sidebar__title">Recherche</h3>
                        <!-- JOUR 6 : value="<?= htmlspecialchars($_GET['q'] ?? '') ?>" -->
                        <input type="text" name="q" class="form-input" placeholder="Rechercher...">
                    </div>

                    <div class="catalog-sidebar__section">
                        <h3 class="catalog-sidebar__title">Catégories</h3>
                        <div class="catalog-sidebar__categories">
                            <!-- JOUR 6 : checked si in_array(...) -->
                            <label class="form-checkbox">
                                <input type="checkbox" name="categories[]" value="vetements">
                                <span>Vêtements (4)</span>
                            </label>
                            <label class="form-checkbox">
                                <input type="checkbox" name="categories[]" value="chaussures">
                                <span>Chaussures (1)</span>
                            </label>
                            <label class="form-checkbox">
                                <input type="checkbox" name="categories[]" value="accessoires">
                                <span>Accessoires (3)</span>
                            </label>
                        </div>
                    </div>

                    <div class="catalog-sidebar__section">
                        <h3 class="catalog-sidebar__title">Prix</h3>
                        <div class="catalog-sidebar__price-inputs">
                            <div class="form-group">
                                <label class="form-label">Min</label>
                                <input type="number" name="price_min" class="form-input" placeholder="0 €" min="0">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Max</label>
                                <input type="number" name="price_max" class="form-input" placeholder="100 €" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="catalog-sidebar__section">
                        <h3 class="catalog-sidebar__title">Disponibilité</h3>
                        <label class="form-checkbox">
                            <input type="checkbox" name="in_stock" value="1">
                            <span>En stock uniquement</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn--primary btn--block">Appliquer</button>
                    <a href="catalogue.html" class="btn btn--secondary btn--block mt-sm">Réinitialiser</a>
                </form>
            </aside>

            <div class="catalog-main">
                <div class="catalog-header">
                    <p><strong>8</strong> produits trouvés</p>
                    <div class="catalog-header__sort">
                        <label>Trier :</label>
                        <select class="form-select" style="width:auto">
                            <option>Nom A-Z</option>
                            <option>Nom Z-A</option>
                            <option>Prix ↑</option>
                            <option>Prix ↓</option>
                        </select>
                    </div>
                </div>

                <!-- ============================================
                     8 PRODUITS
                     JOUR 3 : foreach
                     JOUR 4 : Badges conditionnels
                     ============================================ -->
                <div class="products-grid">

                    <!-- 1. T-shirt - NOUVEAU -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://www.celio.com/dw/image/v2/BGBR_PRD/on/demandware.static/-/Sites-celio-master/default/dw2b3ad16a/hi-res/185654-572-LMEOP_GREEN-WEB3-7.jpg?sw=960&sh=1234&q=85" alt="T-shirt" class="product-card__image">
                            <div class="product-card__badges"><span class="badge badge--new">Nouveau</span></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Vêtements</span>
                            <a href="produit.html?id=1" class="product-card__title">T-shirt Premium </a>
                            <div class="product-card__price"><span class="product-card__price-current">19,99 €</span></div>
                            <p class="product-card__stock product-card__stock--available">✓ En stock (10)</p>
                            <div class="product-card__actions">
                                <form action="panier.html" method="POST">
                                    <input type="hidden" name="product_id" value="1">
                                    <button type="submit" class="btn btn--primary btn--block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </article>

                    <!-- 2. Veste - PROMO + DERNIERS -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://figurinemangafrance.fr/cdn/shop/products/veste-roronoa-zoro-santoryu-one-piece-603.jpg?v=1743535961&width=1445" alt="Zoro" class="product-card__image">
                            <div class="product-card__badges">
                                <span class="badge badge--promo">-20%</span>
                                <span class="badge badge--low-stock">Derniers</span>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Veste</span>
                            <a href="produit.html?id=2" class="product-card__title"></a>
                            <div class="product-card__price">
                                <span class="product-card__price-current">150 €</span>
                                <span class="product-card__price-old">120 €</span>
                            </div>
                            <p class="product-card__stock product-card__stock--low">⚠ Plus que 3</p>
                            <div class="product-card__actions">
                                <form action="panier.html" method="POST">
                                    <input type="hidden" name="product_id" value="2">
                                    <button type="submit" class="btn btn--primary btn--block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </article>

                    <!-- 3. Pull-->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="data:image/jpeg;base64,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" alt="Casquette" class="product-card__image">
                            <div class="product-card__badges"></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Pull</span>
                            <a href="produit.html?id=3" class="product-card__title"></a>
                            <div class="product-card__price"><span class="product-card__price-current">35€</span></div>
                            <p class="product-card__stock product-card__stock--available">✓ En stock (28)</p>
                            <div class="product-card__actions">
                                <form action="panier.html" method="POST">
                                    <input type="hidden" name="product_id" value="3">
                                    <button type="submit" class="btn btn--primary btn--block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </article>

                    <!-- 4. Jean - PROMO -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://via.placeholder.com/300x300/e2e8f0/64748b?text=Jean" alt="Jean" class="product-card__image">
                            <div class="product-card__badges"><span class="badge badge--promo">-30%</span></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Vêtements</span>
                            <a href="produit.html?id=4" class="product-card__title">Jean Slim Stretch</a>
                            <div class="product-card__price">
                                <span class="product-card__price-current">55,99 €</span>
                                <span class="product-card__price-old">79,99 €</span>
                            </div>
                            <p class="product-card__stock product-card__stock--available">✓ En stock (20)</p>
                            <div class="product-card__actions">
                                <form action="panier.html" method="POST">
                                    <input type="hidden" name="product_id" value="4">
                                    <button type="submit" class="btn btn--primary btn--block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </article>

                    <!-- 5. Sac - NOUVEAU -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://via.placeholder.com/300x300/e2e8f0/64748b?text=Sac" alt="Sac" class="product-card__image">
                            <div class="product-card__badges"><span class="badge badge--new">Nouveau</span></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Accessoires</span>
                            <a href="produit.html?id=5" class="product-card__title">Sac à dos Urbain</a>
                            <div class="product-card__price"><span class="product-card__price-current">59,99 €</span></div>
                            <p class="product-card__stock product-card__stock--available">✓ En stock (12)</p>
                            <div class="product-card__actions">
                                <form action="panier.html" method="POST">
                                    <input type="hidden" name="product_id" value="5">
                                    <button type="submit" class="btn btn--primary btn--block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </article>

                    <!-- 6. Montre - RUPTURE -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://via.placeholder.com/300x300/e2e8f0/64748b?text=Montre" alt="Montre" class="product-card__image">
                            <div class="product-card__badges"><span class="badge badge--out-of-stock">Rupture</span></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Accessoires</span>
                            <a href="produit.html?id=6" class="product-card__title">Montre Classic</a>
                            <div class="product-card__price"><span class="product-card__price-current">89,99 €</span></div>
                            <p class="product-card__stock product-card__stock--out">✗ Rupture</p>
                            <div class="product-card__actions">
                                <button class="btn btn--secondary btn--block" disabled>Indisponible</button>
                            </div>
                        </div>
                    </article>

                    <!-- 7. Pull -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://via.placeholder.com/300x300/e2e8f0/64748b?text=Pull" alt="Pull" class="product-card__image">
                            <div class="product-card__badges"></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Vêtements</span>
                            <a href="produit.html?id=7" class="product-card__title">Pull Col Roulé</a>
                            <div class="product-card__price"><span class="product-card__price-current">49,99 €</span></div>
                            <p class="product-card__stock product-card__stock--available">✓ En stock (15)</p>
                            <div class="product-card__actions">
                                <form action="panier.html" method="POST">
                                    <input type="hidden" name="product_id" value="7">
                                    <button type="submit" class="btn btn--primary btn--block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </article>

                    <!-- 8. Ceinture - RUPTURE -->
                    <article class="product-card">
                        <div class="product-card__image-wrapper">
                            <img src="https://via.placeholder.com/300x300/e2e8f0/64748b?text=Ceinture" alt="Ceinture" class="product-card__image">
                            <div class="product-card__badges"><span class="badge badge--out-of-stock">Rupture</span></div>
                        </div>
                        <div class="product-card__content">
                            <span class="product-card__category">Accessoires</span>
                            <a href="produit.html?id=8" class="product-card__title">Ceinture Cuir</a>
                            <div class="product-card__price"><span class="product-card__price-current">34,99 €</span></div>
                            <p class="product-card__stock product-card__stock--out">✗ Rupture</p>
                            <div class="product-card__actions">
                                <button class="btn btn--secondary btn--block" disabled>Indisponible</button>
                            </div>
                        </div>
                    </article>

                </div>

                <!-- ============================================
                     PAGINATION
                     JOUR 6 : Générer dynamiquement
                     ============================================ -->
                <nav class="pagination">
                    <a class="pagination__item pagination__item--disabled">←</a>
                    <a class="pagination__item pagination__item--active">1</a>
                    <a class="pagination__item">2</a>
                    <a class="pagination__item">3</a>
                    <a class="pagination__item">→</a>
                </nav>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <div class="footer__section"><h4>À propos</h4><p>MaBoutique - Shopping en ligne.</p></div>
            <div class="footer__section"><h4>Navigation</h4><ul><li><a href="index.html">Accueil</a></li><li><a href="catalogue.html">Catalogue</a></li><li><a href="contact.html">Contact</a></li></ul></div>
            <div class="footer__section"><h4>Compte</h4><ul><li><a href="connexion.html">Connexion</a></li><li><a href="inscription.html">Inscription</a></li><li><a href="panier.html">Panier</a></li></ul></div>
            <div class="footer__section"><h4>Formation</h4><ul><li><a href="#">Jour 1-5</a></li><li><a href="#">Jour 6-10</a></li><li><a href="#">Jour 11-14</a></li></ul></div>
        </div>
        <div class="footer__bottom"><p>&copy; 2024 MaBoutique</p></div>
    </div>
</footer>

</body>
</html>
