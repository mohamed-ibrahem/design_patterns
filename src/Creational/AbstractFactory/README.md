# Abstract factory
Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.

نمط المصنع المجرَّد هو نمط تصميم إنشائي يسمح لك بإنتاج عائلات من الكائنات المرتبطة ببعضها دون تحديد فئاتهم الحقيقية.

---

### Problem:
Imagine that you’re creating a furniture shop simulator. Your code consists of classes that represent:
1. A family of related products, say: **Chair** + **Sofa** + **CoffeeTable**.
2. Several variants of this family. For example, products **Chair** + **Sofa** + **CoffeeTable** are available in these variants: _**Modern**_, **_Victorian_**, **_ArtDeco_**.

You need a way to create individual furniture objects so that they match other objects of the same family. Customers get quite mad when they receive non-matching furniture.
Also, you don’t want to change existing code when adding new products or families of products to the program. Furniture vendors update their catalogs very often, and you wouldn’t want to change the core code each time it happens.

تخيل أنك تنشئ محاكيًا لمتجر أثاث، وستتكون شيفرتك من فئات تمثل ما يلي:
1. عائلة من المنتجات المرتبطة ببعضها، لنقل **Chair** + **Sofa** + **CoffeeTable**.
2. عدة متغيرات من تلك العائلة، فمثلًا ستكون منتجات **Chair** + **Sofa** + **CoffeeTable** متاحة في المتغيرات التالية: _**Modern**_, **_Victorian_**, **_ArtDeco_**.

وستحتاج إلى طريقة لإنشاء كائنات أثاث منفردة لتتماشى مع عناصر أخرى من نفس عائلتها، ذلك أن العملاء يغضبون إن استلموا أثاثًا غير متماثل. أيضًا ينبغي ألا تغير الشيفرة الموجودة حين تضيف منتجات جديدة أو عائلات منتجات إلى البرنامج، فشركات الأثاث تجدد فهارسها كثيرًا ولا تريد أنت أن تغير شيفرتك في كل مرة تتغير الفهارس!

---
### References:

[Design Patterns: Abstract Factory in PHP](https://refactoring.guru/design-patterns/abstract-factory)

[نمط المصنع المجرد Abstract Factory - موسوعة حسوب](https://wiki.hsoub.com/Design_Patterns/abstract_factory#.D8.A7.D9.84.D8.AD.D9.84)