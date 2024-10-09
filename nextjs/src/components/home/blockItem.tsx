import React from 'react';

const BlockItem: React.FC = () => {
    return (
        <div className="views-row">
            <div data-history-node-id="115" className="row bs-2col-stacked node node--type-article node--view-mode-teaser">
                <div className="col-sm-6 bs-region bs-region--left">
                    <div className="field field--name-field-illustration-teaser field--type-entity-reference field--label-visually_hidden">
                        <div className="field__label visually-hidden">Illustration teaser</div>
                        <div className="field__item">
                            <article className="media media--type-image media--view-mode-media-teaser">
                                <div className="field field--name-field-media-image field--type-image field--label-visually_hidden">
                                    <div className="field__label visually-hidden">Media Image</div>
                                    <div className="field__items">
                                        <div className="field__item">
                                            <img src="/sites/default/files/styles/carre_400x400_/public/2024-09/illustration_teaser_0.png?itok=xzpVFbVl" width="400" height="400" alt="Image cloud data" typeof="foaf:Image" className="image-style-carre-400x400-" />
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div className="col-sm-6 bs-region bs-region--right">
                    <div className="field field--name-node-title field--type-ds field--label-hidden field__item">
                        <h2>
                            <a href="/article/ou-sont-passees-mes-datas">Où sont passées mes datas ?</a>
                        </h2>
                    </div>
                    <div className="field field--name-field-chapeau field--type-string-long field--label-visually_hidden">
                        <div className="field__label visually-hidden">Chapeau</div>
                        <div className="field__item">
                            L'enregistrement des données, également appelé stockage, est un élément crucial pour la sécurité de nos données. Il garde en mémoire nos évènements, nos travaux, nos traces historiques liées à nos activités pour nous les restituer à volonté. Tous les types de supports physiques ont défilé entre nos mains pour disparaître tout d'un coup à l'arrivée du streaming. Mais où sont donc passés nos fichiers ?
                        </div>
                    </div>
                    <div className="node__links">
                        <ul className="links inline">
                            <li className="node-readmore">
                                <a href="/article/ou-sont-passees-mes-datas" rel="tag" title="Où sont passées mes datas ?">En savoir plus<span className="visually-hidden"> sur Où sont passées mes datas ?</span></a>
                            </li>
                            <li className="comment-forbidden">
                                <a href="/user/login?destination=/article/ou-sont-passees-mes-datas%23comment-form">Se connecter</a> pour poster des commentaires
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default BlockItem;
