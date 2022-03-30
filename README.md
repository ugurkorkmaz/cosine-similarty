## Cosine Similarity Library

In data analysis, cosine similarity is a measure of similarity between two sequences of numbers. For defining it, the sequences are viewed as vectors in an inner product space, and the cosine similarity is defined as the cosine of the angle between them, that is, the dot product of the vectors divided by the product of their lengths. It follows that the cosine similarity does not depend on the magnitudes of the vectors, but only on their angle. The cosine similarity always belongs to the interval  For example, two proportional vectors have a cosine similarity of 1, two orthogonal vectors have a similarity of 0, and two opposite vectors have a similarity of -1. The cosine similarity is particularly used in positive space, where the outcome is neatly bounded in .

`Example` 
```PHP
require 'vendor/autoload.php';

$cosine = new \UgurKorkmaz\CosineSimilarity\CosineSimilarity();

print($cosine([1, 2, 3], [1, 2, 3]));

```	