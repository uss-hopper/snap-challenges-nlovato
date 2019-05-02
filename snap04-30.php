<?php
/**
 * gets the Tweet by Tweets date
 *
 * @param \PDO $pdo PDO connection object
 * @param Uuid|string $tweetDateTime to search by
 * @return \SplFixedArray SplFixedArray of Tweets found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 **/
public static function getTweetByTweetDate(\PDO $pdo, DateTime, $tweetDate) : \SplFixedArray {


		$startDateString = $tweetDateTime->format(format: 'Y-m-d') . '00:00:00';
		$startDate= new DateTime($startDateString);
		$endDate = new DateTime($startDateString)
		$endDate->add(new DateInterval('P1D'));

	// create query template
	$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE tweetDateTime >= :startDate AND tweetDate < :endDate";
	$statement = $pdo->prepare($query);

	// bind the tweet profile id to the place holder in the template
	$parameters [
		'start' => $endDate->fprmat("Y-m-d H:i:s.u"),

	]
} => $tweetDateTime->getBytes()];
	$statement->execute($parameters);
	// build an array of tweets
	$tweets = new \SplFixedArray($statement->rowCount());
	$statement->setFetchMode(\PDO::FETCH_ASSOC);
	while(($row = $statement->fetch()) !== false) {
		try {
			$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
			$tweets[$tweets->key()] = $tweet;
			$tweets->next();
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
	}
	return($tweets);
}
