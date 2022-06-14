# Abstract factory
Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.

نمط المصنع المجرَّد هو نمط تصميم إنشائي يسمح لك بإنتاج عائلات من الكائنات المرتبطة ببعضها دون تحديد فئاتهم الحقيقية.

---
### Applicability

Use the Abstract Factory when your code needs to work with various families of related products, but you don’t want it to depend on the concrete classes of those products—they might be unknown beforehand or you simply want to allow for future extensibility.

The Abstract Factory provides you with an interface for creating objects from each class of the product family. As long as your code creates objects via this interface, you don’t have to worry about creating the wrong variant of a product which doesn’t match the products already created by your app.

1. Consider implementing the Abstract Factory when you have a class with a set of Factory Methods that blur its primary responsibility.

2. In a well-designed program each class is responsible only for one thing. When a class deals with multiple product types, it may be worth extracting its factory methods into a stand-alone factory class or a full-blown Abstract Factory implementation.

استخدم نمط المصنع المجرد عندما تحتاج شيفرتك إلى العمل مع عائلات مختلفة من المنتجات المرتبطة لكنك لا تريد لها أن تعتمد على الفئات الحقيقية لتلك المنتجات، إذ قد تكون مجهولة ابتداءً أو أنك تريد التمهيد للتوسع المستقبلي.

يزودك المصنع المجرد بواجهة لإنشاء الكائنات من كل فئة في عائلة المنتجات، وطالما أن شيفرتك تنشئ كائنات من خلال تلك الواجهة فلا تقلق بشأن إنشاء نوع خاطئ لمنتج لا يطابق المنتجات التي أنشأها تطبيقك.

1. استخدم المصنع المجرد عندما يكون لديك فئة فيها مجموعة من أساليب المصنع التي تشوش مسؤوليتها الأساسية.

2. تكون كل فئة في أي برنامج حسن التصميم مسؤولة عن شيء واحد فقط، وحين تتعامل إحدى الفئات مع عدة أنواع من المنتجات فمن المناسب استخراج أساليب المصنع الخاصة بها إلى فئة مصنع مستقلة أو أن تستخدم أسلوب المصنع المجرد هنا بشكل كامل.

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