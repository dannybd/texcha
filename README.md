# This is TeXcha, the LaTeX-based CAPTCHA project.

CAPTCHAs are used across the web to have users prove that they're human. They
usually consist of mangled words or strings of characters which have been skewed
beyond the capabilities of OCR; humans are still decently good at parsing these
squiggles, but computers continue to lag behind (although they are catching up
fast).

TeXcha hopes to take this process further by making the CAPTCHAs formatted LaTeX
equations which the user must retype in pre-compiled LaTeX form. The LaTeX is
compiled from the user's submission, and hashes of images of the true equation
and the submitted equation are compared for equality.

To generate the test equations, we will use a Markov chain model which has been
trained against the body of equations found on Wikipedia to auto-build formulas
with a certain degree of correctness of layout. These formulas will be compiled
into images and saved; the image is used to display the goal to the user, and
the hash of the image is used as a behind-the-scenes equality check against the
user's submission.

Future plans for the project are similar to those of the reCAPTCHA project,
except instead of focusing on translating entire old books, TeXcha hopes to one
day help transcribe equations written in old papers, articles and dissertations.
Modern OCR tech has made transcribing the words of these documents much easier,
but the math has not enjoyed a similar fate; we hope to change that.

======

You can view a live demo [here](http://dbd.mit.edu/texcha/).