<?php

function pull_equations() {
  $json = '["http://en.wikipedia.org/wiki/Banach_fixed_point_theorem","http://en.wikipedia.org/wiki/Banach%E2%80%93Tarski_paradox","http://en.wikipedia.org/wiki/Basel_problem","http://en.wikipedia.org/wiki/Bolzano%E2%80%93Weierstrass_theorem","http://en.wikipedia.org/wiki/Brouwer_fixed_point_theorem","http://en.wikipedia.org/wiki/Buckingham_%CF%80_theorem","http://en.wikipedia.org/wiki/Burnside%27s_lemma","http://en.wikipedia.org/wiki/Cantor%27s_theorem","http://en.wikipedia.org/wiki/Cantor%E2%80%93Bernstein%E2%80%93Schroeder_theorem","http://en.wikipedia.org/wiki/Cayley%27s_formula","http://en.wikipedia.org/wiki/Cayley%27s_theorem","http://en.wikipedia.org/wiki/Clique_problem","http://en.wikipedia.org/wiki/Compactness_theorem","http://en.wikipedia.org/wiki/Erd%C5%91s%E2%80%93Ko%E2%80%93Rado_theorem","http://en.wikipedia.org/wiki/Euler%27s_formula","http://en.wikipedia.org/wiki/Euler%27s_four-square_identity","http://en.wikipedia.org/wiki/Euler%27s_theorem","http://en.wikipedia.org/wiki/Five_color_theorem","http://en.wikipedia.org/wiki/Five_lemma","http://en.wikipedia.org/wiki/Fundamental_theorem_of_arithmetic","http://en.wikipedia.org/wiki/Gauss%E2%80%93Markov_theorem","http://en.wikipedia.org/wiki/G%C3%B6del%27s_incompleteness_theorem","http://en.wikipedia.org/wiki/Goodstein%27s_theorem","http://en.wikipedia.org/wiki/Green%27s_theorem","http://en.wikipedia.org/wiki/Heine%E2%80%93Borel_theorem","http://en.wikipedia.org/wiki/Intermediate_value_theorem","http://en.wikipedia.org/wiki/It%C5%8D%27s_lemma","http://en.wikipedia.org/wiki/K%C3%B6nig%27s_lemma","http://en.wikipedia.org/wiki/K%C3%B6nig%27s_theorem_(set_theory)","http://en.wikipedia.org/wiki/K%C3%B6nig%27s_theorem_(graph_theory)","http://en.wikipedia.org/wiki/Lagrange%27s_theorem","http://en.wikipedia.org/wiki/Liouville%27s_theorem","http://en.wikipedia.org/wiki/Markov%27s_inequality","http://en.wikipedia.org/wiki/Mean_value_theorem","http://en.wikipedia.org/wiki/Multivariate_normal_distribution","http://en.wikipedia.org/wiki/Holomorphic_functions_are_analytic","http://en.wikipedia.org/wiki/Pythagorean_theorem","http://en.wikipedia.org/wiki/Quadratic_equation","http://en.wikipedia.org/wiki/Quotient_rule","http://en.wikipedia.org/wiki/Ramsey%27s_theorem","http://en.wikipedia.org/wiki/Rao%E2%80%93Blackwell_theorem","http://en.wikipedia.org/wiki/Rice%27s_theorem","http://en.wikipedia.org/wiki/Rolle%27s_theorem","http://en.wikipedia.org/wiki/Splitting_lemma","http://en.wikipedia.org/wiki/Squeeze_theorem","http://en.wikipedia.org/wiki/Sum_rule_in_differentiation","http://en.wikipedia.org/wiki/Sum_rule_in_integration","http://en.wikipedia.org/wiki/Sylow_theorems","http://en.wikipedia.org/wiki/Lindemann%E2%80%93Weierstrass_theorem","http://en.wikipedia.org/wiki/Tychonoff%27s_theorem","http://en.wikipedia.org/wiki/Ultrafilter_lemma","http://en.wikipedia.org/wiki/Ultraparallel_theorem","http://en.wikipedia.org/wiki/Urysohn%27s_lemma","http://en.wikipedia.org/wiki/Van_der_Waerden%27s_theorem","http://en.wikipedia.org/wiki/Wilson%27s_theorem","http://en.wikipedia.org/wiki/Zorn%27s_lemma","http://en.wikipedia.org/w/index.php?title=List_of_mathematical_proofs&action=edit&section=3","http://en.wikipedia.org/wiki/Bellman%E2%80%93Ford_algorithm","http://en.wikipedia.org/wiki/Euclidean_algorithm","http://en.wikipedia.org/wiki/Kruskal%27s_algorithm","http://en.wikipedia.org/wiki/Gale%E2%80%93Shapley_algorithm","http://en.wikipedia.org/wiki/Prim%27s_algorithm","http://en.wikipedia.org/wiki/Shor%27s_algorithm","http://en.wikipedia.org/w/index.php?title=List_of_mathematical_proofs&action=edit&section=4","http://en.wikipedia.org/wiki/Category:Articles_containing_proofs","http://en.wikipedia.org/wiki/Basis_(linear_algebra)","http://en.wikipedia.org/wiki/Burrows%E2%80%93Abadi%E2%80%93Needham_logic","http://en.wikipedia.org/wiki/Direct_proof","http://en.wikipedia.org/wiki/Generating_a_vector_space","http://en.wikipedia.org/wiki/Linear_independence","http://en.wikipedia.org/wiki/Polynomial","http://en.wikipedia.org/wiki/Mathematical_proof","http://en.wikipedia.org/wiki/Pumping_lemma","http://en.wikipedia.org/wiki/Simpson%27s_rule","http://en.wikipedia.org/w/index.php?title=List_of_mathematical_proofs&action=edit&section=5","http://en.wikipedia.org/wiki/Category:Articles_containing_proofs","http://en.wikipedia.org/wiki/Addition_in_N","http://en.wikipedia.org/wiki/Algorithmic_information_theory","http://en.wikipedia.org/wiki/Boolean_ring","http://en.wikipedia.org/wiki/Boolean_satisfiability_problem","http://en.wikipedia.org/wiki/Cantor%27s_diagonal_argument","http://en.wikipedia.org/wiki/Cantor%27s_first_uncountability_proof","http://en.wikipedia.org/wiki/Combinatorics","http://en.wikipedia.org/wiki/Combinatory_logic","http://en.wikipedia.org/wiki/Co-NP","http://en.wikipedia.org/wiki/Coset","http://en.wikipedia.org/wiki/Countable","http://en.wikipedia.org/wiki/Counter","http://en.wikipedia.org/wiki/Angle_of_parallelism","http://en.wikipedia.org/wiki/Galois_group","http://en.wikipedia.org/wiki/G%C3%B6del_number","http://en.wikipedia.org/wiki/Group_(mathematics)","http://en.wikipedia.org/wiki/Halting_problem","http://en.wikipedia.org/wiki/Harmonic_series_(mathematics)","http://en.wikipedia.org/wiki/Highly_composite_number","http://en.wikipedia.org/wiki/Hyperbolic_sector","http://en.wikipedia.org/wiki/Hyperbolic_angle","http://en.wikipedia.org/wiki/Infinite_series","http://en.wikipedia.org/wiki/Integer_partition","http://en.wikipedia.org/wiki/Irrational_number","http://en.wikipedia.org/wiki/Limit_point","http://en.wikipedia.org/wiki/Mathematical_induction","http://en.wikipedia.org/wiki/Power_rule","http://en.wikipedia.org/wiki/Product_and_Quotiont_Rules","http://en.wikipedia.org/wiki/Prime_number","http://en.wikipedia.org/wiki/Primitive_recursive_function","http://en.wikipedia.org/wiki/Principle_of_bivalence","http://en.wikipedia.org/wiki/Intuitionistic_logic","http://en.wikipedia.org/wiki/Recursion","http://en.wikipedia.org/wiki/Relational_algebra","http://en.wikipedia.org/wiki/Solvable_group","http://en.wikipedia.org/wiki/Square_root_of_2","http://en.wikipedia.org/wiki/Tetris","http://en.wikipedia.org/wiki/Algebra_of_sets","http://en.wikipedia.org/w/index.php?title=List_of_mathematical_proofs&action=edit&section=6","http://en.wikipedia.org/wiki/Cauchy%27s_integral_formula","http://en.wikipedia.org/wiki/Cauchy_integral_theorem","http://en.wikipedia.org/wiki/Computational_geometry","http://en.wikipedia.org/wiki/Fundamental_theorem_of_algebra","http://en.wikipedia.org/wiki/Lambda_calculus","http://en.wikipedia.org/wiki/Invariance_of_domain","http://en.wikipedia.org/wiki/Minkowski_inequality","http://en.wikipedia.org/wiki/Nash_embedding_theorem","http://en.wikipedia.org/wiki/Open_mapping_theorem_(functional_analysis)","http://en.wikipedia.org/wiki/Product_topology","http://en.wikipedia.org/wiki/Riemann_integral","http://en.wikipedia.org/wiki/Time_hierarchy_theorem","http://en.wikipedia.org/w/index.php?title=List_of_mathematical_proofs&action=edit&section=7","http://en.wikipedia.org/wiki/No_cloning_theorem","http://en.wikipedia.org/wiki/Torque","http://en.wikipedia.org/w/index.php?title=List_of_mathematical_proofs&action=edit&section=8"]';
  
  $json = '["http://en.wikipedia.org/wiki/Banach_fixed_point_theorem","http://en.wikipedia.org/wiki/Banach%E2%80%93Tarski_paradox","http://en.wikipedia.org/wiki/Basel_problem","http://en.wikipedia.org/wiki/Bolzano%E2%80%93Weierstrass_theorem","http://en.wikipedia.org/wiki/Brouwer_fixed_point_theorem","http://en.wikipedia.org/wiki/Buckingham_%CF%80_theorem","http://en.wikipedia.org/wiki/Burnside%27s_lemma","http://en.wikipedia.org/wiki/Cantor%27s_theorem","http://en.wikipedia.org/wiki/Cantor%E2%80%93Bernstein%E2%80%93Schroeder_theorem","http://en.wikipedia.org/wiki/Cayley%27s_formula","http://en.wikipedia.org/wiki/Cayley%27s_theorem","http://en.wikipedia.org/wiki/Clique_problem","http://en.wikipedia.org/wiki/Compactness_theorem","http://en.wikipedia.org/wiki/Erd%C5%91s%E2%80%93Ko%E2%80%93Rado_theorem","http://en.wikipedia.org/wiki/Euler%27s_formula","http://en.wikipedia.org/wiki/Euler%27s_four-square_identity","http://en.wikipedia.org/wiki/Euler%27s_theorem","http://en.wikipedia.org/wiki/Five_color_theorem"]';

  $articles = json_decode($json);

  $equations = array();

  foreach ($articles as $article) {
    $page = file_get_contents($article);
    preg_match_all('/(?<=\<img class="tex" alt=").*?(?=")/i', $page, $results);
    foreach ($results[0] as $result) {
      $equations[] = $result;
    }
  }

  return $equations;
}

function get_latex_url($latex) {
  $base_url = 'http://latex.codecogs.com/gif.latex?';
  return $base_url . rawurlencode($latex);
}

function get_latex_hash($latex) {
  return md5(file_get_contents(get_latex_url($latex)));
}

function check_latex($true_hash, $latex) {
  $test_hash = get_latex_hash($latex);
  return $true_hash == $test_hash;
}

$equations = @file_get_contents('equations.inc') ?: '';
$equations = unserialize($equations);

function filter_equations($eqs) {
  $eqs2 = array();
  foreach ($eqs as $eq) {
    preg_match_all('/\b[a-z0-9]+\b/i', $eq, $results);
    $tokens_count = count($results[0]);
    if ($tokens_count < 3 || $tokens_count > 8) {
      continue;
    }
    $eqs2[] = $eq; // array($eq, $results[0]);
  }
  return $eqs2;
}

$equations = filter_equations($equations);

if (!count($equations) || isset($_GET['refresh'])) {
  $equations = pull_equations();
  file_put_contents(
    'equations.inc', 
    serialize($equations)
  );
}

if (isset($_POST['n'])) {
  $n = intval($_POST['n']);
} else {
  $n = rand(0, count($equations) - 1);
}

if (isset($_GET['imgn'])) {
  $n = intval($_GET['imgn']);
}

$equation = $equations[$n];

$url = get_latex_url($equation);
$img = file_get_contents($url);
$hash = md5($img);

if (isset($_GET['imgn'])) {
  header('Content-type: image/gif');
  echo $img;
  die();
}

$attempted = false;
if (isset($_POST['submit'])) {
  $attempted = true;
  $try_latex = $_POST['latex'];
  $correct = check_latex($hash, $try_latex);
}

header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<!--[if IE 7]><html lang="en-us" class="ie ie7 lte9 lte8"><![endif]-->
<!--[if IE 8]><html lang="en-us" class="ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]><html lang="en-us" class="ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-us"><!--<![endif]-->
<head>
  <link rel="shortcut icon" href="favicon.ico" />
	<title>TeXcha: Prove your humanity through LaTeX</title>
	<!-- script 
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
  </script -->
  <style>
    .texchaForm {
      display: inline-block;
      text-align: center;
      border: 1px solid black;
      padding: 5px;
    }
  </style>
  <!-- Scripts needed by CodeCogs Equation Editor -->
  <link 
    rel="stylesheet" 
    type="text/css" 
    href="http://latex.codecogs.com/css/equation-embed.css" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" href="css/ie6.css" type="text/css"/>
  <![endif]-->
  <script 
    type="text/javascript" 
    src="http://latex.codecogs.com/js/eq_config.js" >
  </script>
  <script 
    type="text/javascript" 
    src="http://latex.codecogs.com/js/eq_editor-lite-9.js" >
  </script>
  <!-- End of Scripts needed -->
	<script>
		var _gaq=[["_setAccount","UA-43270130-1"],["_trackPageview",location.pathname+location.search+location.hash]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
</head>
<body>
<h3>
<?
if (!$attempted) {
  echo "To prove that you're human, " .
    "please transcribe the LaTeX equation below:";
} else {
  if ($correct) {
    echo "Congrats! You correctly transcribed the LaTeX equation. " .
      "I guess you're human after all.";
  } else {
    echo "Hmm, that's not quite right. Are you sure you're human?";
  }
}
?>
</h3>
<form 
  class="texchaForm" 
  action="<?= $_SERVER['REQUEST_URI'] ?>" 
  method="POST"
>
  <img src="?imgn=<?= $n; ?>" alt="Latex Equation"><br>
  <div id="toolbar"></div>
  <textarea
    id="latexInput" 
    name="latex" 
    rows="3" 
    cols="39" 
    autofocus><?= 
      $attempted ? $try_latex : '' 
    ?></textarea>
  <p>
    <img 
      id="equation" 
      src="?"
      alt=""
    />
  </p>
  <input type="hidden" name="n" value="<?= $n ?>">
  <input type="submit" name="submit" value="Submit">
  <input 
    type="button" 
    name="refresh" 
    value="New Challenge"
    onclick="window.location.reload();"
  >
</form>

<script type="text/javascript">
  EqEditor.embed('toolbar','','ope,bra,mat|gel,geu,rel,bin,sym','en-us');
  EqEditor.add(new EqTextArea('equation', 'latexInput'), false);
  EqEditor.update();
</script>
</body>
</html>
