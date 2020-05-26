-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2020 at 11:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NatureBlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `pubdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `categorieID` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `pubdate`, `categorieID`, `views`, `img`) VALUES
(1, 'A Review of the Benefits of Nature Experiences: More Than Meets the Eye', 'Abstract\r\nEvidence that experiences of nature can benefit people has accumulated rapidly. Yet perhaps because of the domination of the visual sense in humans, most research has focused on the visual aspects of nature experiences. However, humans are multisensory, and it seems likely that many benefits are delivered through the non-visual senses and these are potentially avenues through which a physiological mechanism could occur. Here we review the evidence around these lesser studied sensory pathways-through sound, smell, taste, touch, and three non-sensory pathways. Natural sounds and smells underpin experiences of nature for many people, and this may well be rooted in evolutionary psychology. Tactile experiences of nature, particularly beyond animal petting, are understudied yet potentially fundamentally important. Tastes of nature, through growing and consuming natural foods, have been linked with a range of health and well-being benefits. Beyond the five senses, evidence is emerging for other non-visual pathways for nature experiences to be effective. These include ingestion or inhalation of phytoncides, negative air ions and microbes. We conclude that (i) these non-visual avenues are potentially important for delivering benefits from nature experiences; (ii) the evidence base is relatively weak and often based on correlational studies; and (iii) deeper exploration of these sensory and non-sensory avenues is needed.', '2020-05-26 09:11:21', 1, 0, '1'),
(2, 'Nature and Mental Health: An Ecosystem Service Perspective', 'Abstract\r\nA growing body of empirical evidence is revealing the value of nature experience for mental health. With rapid urbanization and declines in human contact with nature globally, crucial decisions must be made about how to preserve and enhance opportunities for nature experience. Here, we first provide points of consensus across the natural, social, and health sciences on the impacts of nature experience on cognitive functioning, emotional well-being, and other dimensions of mental health. We then show how ecosystem service assessments can be expanded to include mental health, and provide a heuristic, conceptual model for doing so.', '2020-05-26 09:11:21', 2, 0, '2'),
(3, 'Nature Contact and Human Health: A Research Agenda', 'Abstract\r\nBackground: At a time of increasing disconnectedness from nature, scientific interest in the potential health benefits of nature contact has grown. Research in recent decades has yielded substantial evidence, but large gaps remain in our understanding.\r\n\r\nObjectives: We propose a research agenda on nature contact and health, identifying principal domains of research and key questions that, if answered, would provide the basis for evidence-based public health interventions.\r\n\r\nDiscussion: We identify research questions in seven domains: a) mechanistic biomedical studies; b) exposure science; c) epidemiology of health benefits; d) diversity and equity considerations; e) technological nature; f) economic and policy studies; and g) implementation science.\r\n\r\nConclusions: Nature contact may offer a range of human health benefits. Although much evidence is already available, much remains unknown. A robust research effort, guided by a focus on key unanswered questions, has the potential to yield high-impact, consequential public health insights. https://doi.org/10.1289/EHP1663.', '2020-05-26 09:11:21', 1, 0, '3'),
(4, 'Wolf Population Genetics in Europe: A Systematic Review, Meta-Analysis and Suggestions for Conservation and Management', 'Abstract\r\nThe grey wolf (Canis lupus) is an iconic large carnivore that has increasingly been recognized as an apex predator with intrinsic value and a keystone species. However, wolves have also long represented a primary source of human-carnivore conflict, which has led to long-term persecution of wolves, resulting in a significant decrease in their numbers, genetic diversity and gene flow between populations. For more effective protection and management of wolf populations in Europe, robust scientific evidence is crucial. This review serves as an analytical summary of the main findings from wolf population genetic studies in Europe, covering major studies from the \'pre-genomic era\' and the first insights of the \'genomics era\'. We analyse, summarize and discuss findings derived from analyses of three compartments of the mammalian genome with different inheritance modes: maternal (mitochondrial DNA), paternal (Y chromosome) and biparental [autosomal microsatellites and single nucleotide polymorphisms (SNPs)]. To describe large-scale trends and patterns of genetic variation in European wolf populations, we conducted a meta-analysis based on the results of previous microsatellite studies and also included new data, covering all 19 European countries for which wolf genetic information is available: Norway, Sweden, Finland, Estonia, Latvia, Lithuania, Poland, Czech Republic, Slovakia, Germany, Belarus, Russia, Italy, Croatia, Bulgaria, Bosnia and Herzegovina, Greece, Spain and Portugal. We compared different indices of genetic diversity in wolf populations and found a significant spatial trend in heterozygosity across Europe from south-west (lowest genetic diversity) to north-east (highest). The range of spatial autocorrelation calculated on the basis of three characteristics of genetic diversity was 650-850 km, suggesting that the genetic diversity of a given wolf population can be influenced by populations up to 850 km away. As an important outcome of this synthesis, we discuss the most pressing issues threatening wolf populations in Europe, highlight important gaps in current knowledge, suggest solutions to overcome these limitations, and provide recommendations for science-based wolf conservation and management at regional and Europe-wide scales.', '2020-05-26 09:11:21', 3, 0, '4'),
(5, 'Modeling the Relationship Between Wolf Control and Cattle Depredation', 'Abstract\r\nWolf control to reduce cattle depredation is an important issue to ecology and agriculture in the United States. Two recent papers use the same dataset having wolf population characteristics and cattle depredation, but come to opposing conclusions concerning the link between wolf control and cattle depredation. Our paper aims to resolve this issue by using the same dataset and developing a model based on a causal association that would explain the nature of the relationship between wolf control and cattle depredation. We use the data on wolf population, number of cattle, number of wolves killed and number of cattle killed, from the U.S. Fish and Wildlife Services Interagency Annual Wolf Reports over the period of 1987-2012. We find a positive link between wolf control and cattle depredation. However, it would be incorrect to infer that wolf control has a positive effect on the number of cattle depredated. We maintain that this link comes from a growing wolf population, which increases cattle depredation, and in turn, causes an increase in the number of wolves killed. While the wolf population is growing, we see both wolf removal and cattle depredation simultaneously grow. It is not until the wolf population growth nears the steady state, that removal of wolves has a sufficient negative effect to reduce or stabilize the number of cattle depredated.', '2020-05-26 09:11:21', 2, 0, '5'),
(6, 'The Wolf of Hypomethylating Agent Failure: What Comes Next?', 'Affiliations expand\r\nPMID: 31366462 PMCID: PMC6669157 DOI: 10.3324/haematol.2019.222794\r\nFree PMC article', '2020-05-26 09:11:21', 3, 0, '6');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Human&Nature'),
(2, 'Wolf'),
(3, 'Wild Hunt'),
(4, 'Lorem'),
(5, 'Ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
